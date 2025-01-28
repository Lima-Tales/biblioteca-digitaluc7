<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos (fillables)
    protected $fillable = ['name', 'birth_date']; // Ajuste conforme o nome das colunas na sua tabela
}
