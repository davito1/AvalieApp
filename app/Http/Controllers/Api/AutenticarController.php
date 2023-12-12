<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class AutenticarController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'senha');

        if (Auth::attempt($credentials)) {
            $usuario = Auth::user();

            return response()->json(['token' => $usuario->createToken('authToken')->plainTextToken], 200);
        } else {
            return response()->json(['error' => 'Credenciais inválidas'], 401);
        }
    }
}
