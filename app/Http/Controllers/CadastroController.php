<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Genre;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create()
    {
        // Buscar todos os autores e gêneros
        $authors = Author::all();
        $genres = Genre::all();

        // Retornar a view 'cadastro' com os dados dos autores e gêneros
        return view('register', compact('authors', 'genres'));
    }
}
