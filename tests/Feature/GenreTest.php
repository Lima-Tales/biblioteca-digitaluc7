<?php

namespace Tests\Feature;

use App\Models\Genre;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GenreTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_genre()
    {
        // Criação de um gênero literário
        $genre = Genre::create([
            'name' => 'Dystopia',
        ]);

        // Verifica se o gênero foi realmente criado no banco de dados
        $this->assertDatabaseHas('genres', [
            'name' => 'Dystopia',
        ]);
    }

    public function test_read_genre()
    {
        $genre = Genre::factory()->create(); // Criando um gênero com a Factory

        // Verifica se o gênero foi recuperado corretamente
        $this->assertEquals($genre->name, Genre::find($genre->id)->name);
    }

    public function test_update_genre()
    {
        $genre = Genre::factory()->create();

        // Atualizando o nome do gênero
        $genre->update(['name' => 'Science Fiction']);

        // Verifica se o nome foi atualizado no banco de dados
        $this->assertDatabaseHas('genres', [
            'name' => 'Science Fiction',
        ]);
    }

    public function test_delete_genre()
    {
        $genre = Genre::factory()->create();

        // Excluindo o gênero
        $genre->delete();

        // Verifica se o gênero foi removido do banco
        $this->assertDatabaseMissing('genres', [
            'name' => $genre->name,
        ]);
    }
}
