<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Método para listar os autores
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // Método para criar um novo autor
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Author::create($request->all());
        return redirect()->back()->with('success', 'Autor criado com sucesso!');
    }

    // Método para exibir o formulário de edição de um autor
    public function edit($id)
    {
        $author = Author::findOrFail($id); // Encontra o autor pelo ID
        return view('authors.edit', compact('author')); // Retorna a view de edição com o autor
    }

    // Método para atualizar um autor
    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id); // Encontra o autor pelo ID
        $author->update($request->all()); // Atualiza os dados do autor
        return redirect()->route('authors.index')->with('success', 'Autor atualizado com sucesso!');
    }

    // Método para excluir um autor
    public function destroy($id)
    {
        $author = Author::findOrFail($id); // Encontra o autor pelo ID
        $author->delete(); // Exclui o autor
        return redirect()->route('authors.index')->with('success', 'Autor excluído com sucesso!');
    }
}
