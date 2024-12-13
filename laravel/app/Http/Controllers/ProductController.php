<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('manage.produtos', compact('products'));
    }

    public function buscarTudo()
    {
        $products = Product::all();

        return view('TabelaProdutos', compact('products'));
    }

    public function showregisterpainel()
    {
        return view('manage.RegistarProdutos');
    }

    public function newProduct(Request $request)
    {
        $nome = $request->nome;
        $preco = $request->preco;
        $quantidade = $request->quantidade;
        $data_for = $request->dataforn;

        DB::insert('insert into product (nome, preco, quantidade, data_fornecimento)
        values (?, ?, ?, ?)', [$nome, $preco, $quantidade, $data_for]);
        return redirect('/manage/produtos')->with('success', 'Produto Registado com sucesso!');
    }

    public function visualizarProduct() {}

    public function apagarProduct() {}


    // Codigo GPT
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('manage.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('manage.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('manage.produtos')->with('success', 'Produto atualizado com sucesso!');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('manage.produtos')->with('success', 'Produto removido com sucesso!');
    }
}
