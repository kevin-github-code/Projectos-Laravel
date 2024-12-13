<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelaFornecedortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Fornecedor')->insert([
            'nome_empresa' => 'Key Supplier',
            'contacto_fornecedor' => '874123943',
            'email_fornecedor' => 'keys@email.com',
            'produto_fornecido' => 'todos',
            'quantidade_recebida' => '10000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
