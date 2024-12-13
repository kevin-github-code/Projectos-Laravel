<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TabelaGestor extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gestores')->insert([
            'nome' => 'Delcio',
            'email' => 'delcio@email.com',
            'senha' => Hash::make('s'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
