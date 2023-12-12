<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Usuario::where('email', $request->email)->exists() && Usuario::where('senha', md5($request->senha))->exists()){
            $usuario = Usuario::firstWhere('email', $request->email);
            session(['usuario' => $usuario->nome]);

            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error', 'Seu e-mail ou senha estão incorretos.');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('pagelogin');
    }
}


