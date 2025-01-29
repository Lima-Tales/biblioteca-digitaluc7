<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Método para exibir todos os gêneros
    public function index()
    {
        $genres = Genre::all(); // Obtém todos os gêneros
        return view('genres.index', compact('genres')); // Retorna a view com os gêneros
    }

    // Método para exibir o formulário de criação
    public function create()
    {
        return view('genres.create'); // Certifique-se de que essa view existe
    }

    // Método para salvar o novo gênero
    public function store(Request $request)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'name' => 'required|string|max:255', // Ajuste conforme os campos do seu formulário
        ]);

        // Criando e salvando o novo gênero
        $genre = new Genre();
        $genre->name = $request->input('name'); // Ajuste conforme os campos do seu formulário
        $genre->save();

        // Redirecionando após salvar o gênero, com uma mensagem de sucesso
        return redirect()->route('genres.index')->with('success', 'Gênero criado com sucesso!');
    }

    // Outros métodos do CRUD (edit, update, destroy, etc.) podem ser adicionados aqui
}
