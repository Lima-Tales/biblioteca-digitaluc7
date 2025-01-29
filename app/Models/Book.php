<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Defina os campos que podem ser preenchidos
    protected $fillable = ['title', 'isbn', 'author_id', 'genre_id']; // Defina os campos conforme a sua migração

    // Relacionamento: um livro pertence a um gênero
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    // Relacionamento: um livro pertence a um autor
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
