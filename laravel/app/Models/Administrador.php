<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'administrador';

    // Campos que podem ser manipulados em massa
    protected $fillable = ['nome', 'email', 'senha'];
}
