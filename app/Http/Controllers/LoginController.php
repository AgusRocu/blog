<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('login', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('posts.index'));           
        }

        return back()->withErrors([
            'login' => 'Usuario y contraseña incorrectos',
        ])->onlyInput('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('posts.index')->with('mensaje_ok', 'Hasta la próxima');        
    }
}
