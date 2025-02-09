<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Author::create($request->all());
        return redirect()->back()->with('success', 'Autor criado com sucesso!');
    }
}
