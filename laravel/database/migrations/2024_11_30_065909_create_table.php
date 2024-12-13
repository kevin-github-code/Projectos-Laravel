<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('Administrador', function (Blueprint $table) {
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
        Schema::dropIfExists('table');
    }
};
