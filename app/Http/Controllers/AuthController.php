<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexRegis()
    {
        return view('Authentication.register', [
            "title" => "Registration Page"
        ]);
    }
    public function indexLog()
    {
        return view('Authentication.login', [
            "title" => "Login Page"
        ]);
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            "name"      => "required|max:255",
            "username"  => "required|min:3|max:255|unique:users",
            "email"     => "required|email:dns|unique:users",
            "password"  => "required|min:3|max:255"
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('success', 'Registration Successful!');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            "email"     => "required|email:dns",
            "password"  => "required"
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->level == 'admin') {
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            }else
            {
                $request->session()->regenerate();
                return redirect()->intended('/');

            }
        }

        return back()->with('loginError', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect('/');
    }
}
