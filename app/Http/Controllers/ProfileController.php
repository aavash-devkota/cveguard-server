<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('dashboard.edit-profile');
    }

    public function update(Request $request)
    {
        $inputs = $request->validate([
            'name' => 'string|max:255',
            'current_password' => 'string|max:255',
            'new_password' => 'required_unless:current_password,null|string|max:255|confirmed',
        ]);

        $user = Auth::user();
        if (array_key_exists('name', $inputs)) {
            $user->name = $inputs['name'];
        }

        if (array_key_exists('new_password', $inputs)) {
            if (! password_verify($inputs['current_password'], $user->password)) {
                flash()->error('Current password is incorrect.');

                return back();
            }
            $user->password = bcrypt($inputs['new_password']);
        }

        $user->save();

        flash()->success('Profile Updated Successfully!');

        return back();
    }
}
