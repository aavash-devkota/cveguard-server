<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login_view()
    {
        return view('auth.signin');
    }

    public function login_submit(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Please enter your password.',
        ]);

        if (! Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('homepage'));
    }

    public function signup_view()
    {
        return view('auth.signup');
    }

    public function signup_submit(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised()],
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already registered.',
            'password.required' => 'Please enter your password.',
        ]);

        $user = User::create($credentials);
        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended('verification.notice');
    }

    public function verify_email_view()
    {
        return view('auth.verify-email');
    }

    public function verify_email_link(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect(route('homepage'));
    }

    public function resend_verify_email(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        flash()->info('Verification link sent!');

        return back();
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('homepage'));
    }
}
