<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TabelaInicialSeeder extends Seeder
{
    public function run()
    {
        DB::table('Administrador')->insert([
            'nome' => 'Kevin',
            'email' => 'kevin.john@email.com',
            'senha' => Hash::make('senha'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
