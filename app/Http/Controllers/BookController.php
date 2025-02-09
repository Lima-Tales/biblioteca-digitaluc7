<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author', 'genre')->get();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required',
            'genre_id' => 'required'
        ]);

        Book::create($request->all());
        return redirect()->back()->with('success', 'Livro cadastrado com sucesso!');
    }

    // Mostrar o formulário de edição do livro
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        $genres = Genre::all();
        return view('books.edit', compact('book', 'authors', 'genres'));
    }

    // Atualizar o livro após edição
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required',
            'genre_id' => 'required'
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Deletar um livro
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete(); // Deleta o livro

        return redirect()->route('books.index')->with('success', 'Livro excluído com sucesso!');
    }
}
