<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Genre::create($request->all());
        return redirect()->back()->with('success', 'Gênero criado com sucesso!');
    }
}
