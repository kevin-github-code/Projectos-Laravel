<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    // Campos que podem ser manipulados em massa
    protected $fillable = ['nome', 'preco', 'quantidade', 'data_fornecimento'];

    public function todos() {
        DB::select('select * from product');
    }
}
