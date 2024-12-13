<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome_empresa'); // Nome da Empresa
            $table->integer('contacto_fornecedor'); // Contacto do fornecedor
            $table->string('email_fornecedor')->unique(); // Email do fornecedor
            $table->string('produto_fornecido'); // Produto fornecido
            $table->integer('quantidade_recebida'); // Quantidade recebida
            $table->timestamps(); // Campos created_at e updated_at
        });

        Schema::create('Usuarios', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do usuário
            $table->string('email')->unique(); // E-mail único para cada usuário
            $table->string('senha'); // Senha encriptada
            $table->timestamps(); // Campos created_at e updated_at
        });

        Schema::create('Gestores', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do usuário
            $table->string('email')->unique(); // E-mail único para cada usuário
            $table->string('senha'); // Senha encriptada
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_03');
    }
};
