<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EsewaPaymentController extends Controller
{
    public function initialize(Request $request)
    {
        $current_user = Auth::user();

        $amount = 0;
        switch ($request->query('plan')) {
            case 'personal':
                $amount = 5000;
                if ($current_user->subscription_type === 'personal') {
                    flash()->error('You are already subscribed to this plan.');

                    return redirect()->route('dashboard.index');
                }
                if ($current_user->subscription_type === 'pro') {
                    flash()->error('You are already subscribed to the pro plan.');

                    return redirect()->route('dashboard.index');
                }
                break;
            case 'pro':
                $amount = 10000;
                if ($current_user->subscription_type === 'pro') {
                    flash()->error('You are already subscribed to this plan.');

                    return redirect()->route('dashboard.index');
                }
                break;
            default:
                flash()->error('Invalid plan selected.');

                return redirect()->route('dashboard.index');
        }

        // Setup form payload
        $process_url = 'https://rc-epay.esewa.com.np/api/epay/main/v2/form';
        $tuid = now()->timestamp;
        $merchant_id = 'EPAYTEST';
        $message = "total_amount=$amount,transaction_uuid=$tuid,product_code=$merchant_id";
        $s = hash_hmac('sha256', $message, '8gBm/:&EnhH.1/q', true);
        $signature = base64_encode($s);
        $data = [
            'amount' => $amount,
            'product_delivery_charge' => '0',
            'product_service_charge' => '0',
            'product_code' => $merchant_id,
            'signature' => $signature,
            'signed_field_names' => 'total_amount,transaction_uuid,product_code',
            'failure_url' => route('esewa.verify'),
            'success_url' => route('esewa.verify'),
            'tax_amount' => '0',
            'total_amount' => $amount,
            'transaction_uuid' => $tuid,
        ];

        // generate form from attributes
        $htmlForm = '<form method="POST" action="'.($process_url).'" id="esewa-form">';
        foreach ($data as $name => $value) {
            $htmlForm .= sprintf('<input name="%s" type="hidden" value="%s">', $name, $value);
        }
        $htmlForm .= '</form><script type="text/javascript">document.getElementById("esewa-form").submit();</script>';

        // output the form
        return response($htmlForm, 200)->header('Content-Type', 'text/html');
    }

    public function verify(Request $request)
    {
        $decoded_string = base64_decode($request->data);
        $data = json_decode($decoded_string, true);
        $status = $data['status'] ?? null;
        $total_amount = $data['total_amount'] ?? null;

        $is_payment_successful = $status === 'COMPLETE';

        if (! $is_payment_successful) {
            flash()->error('Payment failed.');

            return redirect()->route('dashboard.index')->with('error', 'Payment failed.');
        }

        // Update user's plan
        $user = auth()->user();
        $user->subscription_type = $total_amount === 5000 ? 'personal' : 'pro';
        $user->save();

        flash()->success('Payment successful.');

        return redirect()->route('dashboard.index');
    }
}
