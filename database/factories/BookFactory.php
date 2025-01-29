<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author_id' => Author::factory(),  // Criando autor com a factory
            'genre_id' => Genre::factory(),   // Criando gênero com a factory
            'isbn' => $this->faker->isbn13,

        ];
    }
}
