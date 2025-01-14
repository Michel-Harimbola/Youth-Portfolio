<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;

use function Laravel\Prompts\alert;

class AuthController extends Controller
{
    public function loginForm(){
        return Inertia::render('Index/Login');
    }

    public function login(Request $request){

        if (Auth::check()) {
            return redirect('/Login/Index');
        }

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/Login/Index');
        }

        return back()->withErrors([
            'email' => "Les informations d'identification ne correspondent pas.",
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
