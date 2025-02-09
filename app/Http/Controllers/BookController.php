<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
}
