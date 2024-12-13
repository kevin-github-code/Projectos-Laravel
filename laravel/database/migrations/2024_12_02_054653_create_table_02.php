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
        Schema::create('product', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do produto
            $table->double('preco'); // Preco do produto
            $table->integer('quantidade'); // Quantidade recebida
            $table->date('data_fornecimento'); // Data de fornecimenro
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_02');
    }
};
