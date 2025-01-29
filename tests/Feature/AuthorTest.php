<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Author;

class AuthorTest extends TestCase
{
    use RefreshDatabase; // Essa trait vai resetar o banco após cada teste

    public function test_create_author()
    {
        // Criação de um autor
        $author = Author::create([
            'name' => 'J.K. Rowling',
            'birth_date' => '1965-07-31',
        ]);

        // Verifica se o autor foi realmente criado no banco de dados
        $this->assertDatabaseHas('authors', [
            'name' => 'J.K. Rowling',
        ]);

    }

    public function test_read_author()
    {
        $author = Author::factory()->create(); // Criando um autor com a Factory

        // Verifica se o autor foi recuperado corretamente
        $this->assertEquals($author->name, Author::find($author->id)->name);
    }
    public function test_update_author()
{
    $author = Author::factory()->create();

    // Atualizando o nome do autor
    $author->update(['name' => 'George Orwell']);

    // Verifica se o nome foi atualizado no banco de dados
    $this->assertDatabaseHas('authors', [
        'name' => 'George Orwell',
    ]);
}
public function test_delete_author()
{
    $author = Author::factory()->create();

    // Excluindo o autor
    $author->delete();

    // Verifica se o autor foi removido do banco
    $this->assertDatabaseMissing('authors', [
        'name' => $author->name,
    ]);
}

}
