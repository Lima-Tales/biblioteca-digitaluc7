<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // Exibe todos os autores
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // Exibe o formulário de criação de autor
    public function create()
    {
        return view('authors.create');
    }

    // Armazena um novo autor
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|max:255',
            'birth_date' => 'required|date',
        ]);

        // Criação do autor com os dados validados
        Author::create([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
        ]);

        // Redireciona de volta para a lista de autores
        return redirect()->route('authors.index');
    }

    // Exibe o formulário de edição de um autor
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    // Atualiza as informações de um autor
    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|max:255',
            'birth_date' => 'required|date',
        ]);

        // Encontra o autor e atualiza seus dados
        $author = Author::findOrFail($id);
        $author->update([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
        ]);

        // Redireciona de volta para a lista de autores
        return redirect()->route('authors.index');
    }

    // Exclui um autor
    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();

        // Redireciona de volta para a lista de autores
        return redirect()->route('authors.index');
    }
}
