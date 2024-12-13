<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedor';

    // Campos que podem ser manipulados em massa
    protected $fillable = ['nome_empresa', 'contacto_fornecedor', 'email_fornecedor', 'produto_fornecido', 'quantidade_recebida'];

    public function todos() {
        DB::select('select * from fornecedor');
    }
}
