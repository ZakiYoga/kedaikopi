<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
        {
            return view('login.index', [
                'title' => 'Login'
            ]);
        }

    public function authenticate(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|email:dns',
                'password' => 'required'
            ]);

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                if (auth()->user()->role === 'admin') {
                    return redirect()->intended('/dashboard-admin');
                } else {
                    return redirect()->intended('/dashboard');
                }
            }

            return back()->with('loginError', 'Login failed!');
        }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}