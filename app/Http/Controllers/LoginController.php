<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view("login", [
            "title" => "Login",
        ]);
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            "username"=> "required",
            "password"=> "required",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/inventory');
        }

        return back()->with('loginError','Incorrect username or password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
