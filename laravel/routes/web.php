<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

// Rota pública (não requer login)
Route::get('/', [HomeController::class, 'index']);

// Rota para carregar e efetuar o login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

//Rotas para o registo individual
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Rotas que requerem autenticação
// Route::middleware(['auth'])->group(function () {
// Rota para carregar a pagina de Administracao do Admin
Route::get('/admin', [AdminController::class, 'index']);

// Rota para carregar a pagina de gestao do Manager
Route::get('/manage', [ManagerController::class, 'index']);

// Rota para carregar a pagina de produtos para o manager
Route::get('/manage/produtos', [ProductController::class, 'index'])->name('manage.produtos');

// Rota para carregar a pagina de fornecedor para o manager
Route::get('/manage/fornecedores', [FornecedoresController::class, 'index'])->name('manage.fornecedores');

// Rotas para registar produtos e fornecedores
Route::post('/manage/registarprodutos', [ProductController::class, 'newProduct'])->name('registerpro.post');
Route::post('/manage/registarfornecedores', [FornecedoresController::class, 'newSupplier'])->name('registerforn.post');

// Rotas para gerenciar produtos
Route::get('/manage/produtos/{id}', [ProductController::class, 'show'])->name('products.show'); // Visualizar
Route::get('/manage/produtos/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Editar
Route::delete('/manage/produtos/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Apagar
Route::post('/manage/produtos', [ProductController::class, 'store'])->name('products.store'); // Salvar novo produto
Route::put('/manage/produtos/{id}', [ProductController::class, 'update'])->name('products.update'); // Atualizar produto

// Rotas para o formulario de registo de produtos e fornecedores
Route::get('/manage/registarprodutos', [ProductController::class, 'showregisterpainel']);
Route::get('/manage/registarfornecedores', [FornecedoresController::class, 'showregisterpainel']);

// Rota para o dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Rotas para as tabelas
Route::get('/TabelaProdutos', [ProductController::class, 'buscarTudo'])->name('TabelaProdutos');
Route::get('/TabelaFornecedores', [FornecedoresController::class, 'buscarTudo'])->name('TabelaFornecedores');

// Rotas para efetuar o logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });
