<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('genre')->get(); // Obtendo todos os livros com os gêneros
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $genres = Genre::all(); // Obtendo todos os gêneros para o dropdown
        return view('books.create', compact('genres'));
    }

    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre_id' => 'required|exists:genres,id', // Valida se o gênero existe
        ]);

        // Criando o livro
        Book::create($request->all());
        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        $genres = Genre::all(); // Obtendo todos os gêneros para o dropdown
        return view('books.edit', compact('book', 'genres'));
    }

    public function update(Request $request, Book $book)
    {
        // Validação
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre_id' => 'required|exists:genres,id', // Valida se o gênero existe
        ]);

        // Atualizando o livro
        $book->update($request->all());
        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete(); // Deletando o livro
        return redirect()->route('books.index');
    }
}
