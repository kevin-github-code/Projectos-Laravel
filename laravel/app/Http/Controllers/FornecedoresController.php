<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornecedoresController extends Controller
{
    public function buscarTudo()
    {
        $fornecedores = Fornecedor::all();

        return view('TabelaFornecedores', compact('fornecedores'));
    }

    public function showregisterpainel()
    {
        return view('manage.RegistarFornecedores');
    }

    public function index(){
        $fornecedores = Fornecedor::all();

        return view('manage.fornecedores', compact('fornecedores'));
    }

    public function newSupplier(Request $request)
    {
        $nome = $request->nome_empresa;
        $contacto = $request->contacto_fornecedor;
        $email = $request->email_fornecedor;
        $produto = $request->produto_fornecido;
        $quantidade = $request->quantidade_recebida;

        DB::insert('insert into fornecedor (nome_empresa, contacto_fornecedor, email_fornecedor, produto_fornecido, quantidade_recebida)
        values (?, ?, ?, ?, ?)', [$nome, $contacto, $email, $produto, $quantidade]);
        return redirect('/manage/fornecedores')->with('success', 'Fornecedor Registado com sucesso!');
    }
}
