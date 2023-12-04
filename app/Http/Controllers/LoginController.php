<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            // if(Auth::user()->role == 'admin') {
            //     return redirect(url('/dashboard'))
            //         ->withSuccess('You have successfully logged in!');
            // } else {
            //     return redirect(url('/listEvent'))
            //         ->withSuccess('You have successfully logged in!');
            // }
            return redirect(url('/dashboard'));
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');
    }
}
