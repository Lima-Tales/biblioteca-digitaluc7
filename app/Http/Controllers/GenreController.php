<?php
// app/Http/Controllers/GenreController.php
namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        // Mostrar a lista de gêneros (se necessário)
    }

    public function create()
    {
        // Exibir o formulário para criar um novo gênero
    }

    public function store(Request $request)
    {
        // Validação dos dados recebidos do formulário
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:genres,name', // nome obrigatório, string, máximo 255 caracteres e único
        ]);

        // Criação de um novo gênero no banco de dados
        Genre::create([
            'name' => $validatedData['name'], // Salvando o nome do gênero no banco
        ]);

        // Redirecionamento após salvar com mensagem de sucesso
        return redirect()->route('genres.index')->with('success', 'Gênero cadastrado com sucesso!');
    }

    public function show($id)
    {
        // Exibir detalhes de um gênero específico
    }

    public function edit($id)
    {
        // Exibir o formulário de edição para um gênero específico
    }

    public function update(Request $request, $id)
    {
        // Atualizar as informações de um gênero específico
    }

    public function destroy($id)
    {
        // Remover um gênero específico do banco de dados
    }
}
