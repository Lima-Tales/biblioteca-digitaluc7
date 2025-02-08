<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
      public function run()
    {
        Book::create(['title' => 'Dom Casmurro', 'author_id' => 1, 'genre_id' => 1]);
        Book::create(['title' => 'A Hora da Estrela', 'author_id' => 2, 'genre_id' => 2]);
    }
}
