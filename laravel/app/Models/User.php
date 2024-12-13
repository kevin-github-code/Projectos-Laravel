<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    // Campos que podem ser manipulados em massa
    protected $fillable = ['nome', 'email', 'senha'];

}
