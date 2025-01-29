<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_book()
    {
        // Criação de um livro
        $book = Book::create([
            'title' => '1984',
            'author_id' => 1, // Ajuste conforme necessário
            'genre_id' => 1,  // Ajuste conforme necessário
            'isbn' => '123456789', //Adicionando ISBN
            'published_at' => '1949-06-08',
        ]);

        // Verifica se o livro foi realmente criado no banco de dados
        $this->assertDatabaseHas('books', [
            'title' => '1984',
        ]);
    }

    public function test_read_book()
    {
        $book = Book::factory()->create(); // Criando um livro com a Factory

        // Verifica se o livro foi recuperado corretamente
        $this->assertEquals($book->title, Book::find($book->id)->title);
    }

    public function test_update_book()
    {
        $book = Book::factory()->create();

        // Atualizando o título do livro
        $book->update(['title' => 'Animal Farm']);

        // Verifica se o título foi atualizado no banco de dados
        $this->assertDatabaseHas('books', [
            'title' => 'Animal Farm',
        ]);
    }

    public function test_delete_book()
    {
        $book = Book::factory()->create();

        // Excluindo o livro
        $book->delete();

        // Verifica se o livro foi removido do banco
        $this->assertDatabaseMissing('books', [
            'title' => $book->title,
        ]);
    }

}
