<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // AuthController.php
    public function showAdminPage()
    {
        if (Auth::check()) {
            return 'Admin Page';
        } else {
            return 'Not Authenticated';
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
