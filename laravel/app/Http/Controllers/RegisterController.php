<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;

        DB::insert('insert into usuarios (nome, email, senha) values (?, ?, ?)', [$nome, $email, Hash::make($senha)]);
        return redirect('/login')->with('success', 'Registado com sucesso!');
    }
}
