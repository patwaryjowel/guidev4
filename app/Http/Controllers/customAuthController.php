<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class customAuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function boot(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials,$remember = true)) {
            $request->session()->regenerate();

            return 'success';
        }

        return 'error';
    }

    public function signup(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'utype' => 'user',
            'token' => $request->password,
            'country' => $request->country,
            'alternate_email_one' => $request->emailone,
            'newsletter' => 'yes',
        ]);

        Auth::login($user, $remember = true);

        return 'success';
    }
}

