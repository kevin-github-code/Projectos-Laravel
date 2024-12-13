<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Gestor;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

// public function __construct()
// {
//     Middleware auth()->user();
// }

    // Mostrar o formulário de login
    public function showLoginForm()
    {
        return view('login');
    }

    // Processar o login
    public function login(Request $request)
    {
        // Validação dos dados do formulário
        $credentials = $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        // if (Auth::attempt($credentials)) {
            // Buscar o utilizador pelo e-mail
            $utilizador = User::where('email', $request->email)->first();
            $administrador = Administrador::where('email', $request->email)->first();
            $gestor = Gestor::where('email', $request->email)->first();

            if ($utilizador && Hash::check($request->senha, $utilizador->senha)) {
                // Login bem-sucedido, salve informações na sessão ou redirecione
                session(['admin_id' => $utilizador->id]); // Exemplo: salvar ID na sessão
                return redirect('/dashboard')->with('success', 'Bem-vindo, Utilizador!');
            }
            if ($administrador && Hash::check($request->senha, $administrador->senha)) {
                // Login bem-sucedido, salve informações na sessão ou redirecione
                session(['admin_id' => $administrador->id]); // Exemplo: salvar ID na sessão
                return redirect('/admin')->with('success', 'Bem-vindo, Administrador!');
            }
            if ($gestor && Hash::check($request->senha, $gestor->senha)) {
                // Login bem-sucedido, salve informações na sessão ou redirecione
                session(['admin_id' => $gestor->id]); // Exemplo: salvar ID na sessão
                return redirect('/manage')->with('success', 'Bem-vindo, Manager!');
            }
        // }

        // Login falhou
        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        // Destruir a sessão do usuário
        Auth::logout();  // Para usar o Auth com sessões Laravel

        // Limpar a sessão manualmente (opcional)
        Session::flush();

        // Redirecionar para a página de login ou para uma página específica
        return redirect('/welcome')->with('success', 'Você saiu com sucesso!');
    }
}
