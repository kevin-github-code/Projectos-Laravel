<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelaProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Product')->insert([
            'nome' => 'Batata',
            'preco' => '1000.00',
            'quantidade' => '15',
            'data_fornecimento' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
