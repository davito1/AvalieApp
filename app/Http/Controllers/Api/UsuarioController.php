<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastrar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios|max:255',
            'senha' => 'required|string|min:6',
        ]);

        $usuario = new Usuario();
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->senha = bcrypt($request->input('senha'));
        $usuario->save();

        return response()->json(['message' => 'Usuário cadastrado com sucesso', 'redirect' => '/cadastrar'], 201);
    }

    public function login(Request $request) {
        $usuario = Usuario::where('email', $request->email)->firstOrFail();
        if (!Hash::check($request->senha, $usuario->senha)) {
            return response()->json('Usuario não encontrado', 404);
        }

        return response()->json($usuario);
    }
}
