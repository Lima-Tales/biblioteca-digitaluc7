<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['title' => 'Orgulho e Preconceito', 'isbn' => '1234567890', 'author_id' => 1, 'genre_id' => 1],
            ['title' => 'Cem Anos de Solidão', 'isbn' => '0987654321', 'author_id' => 2, 'genre_id' => 2],
        ]);
    }
}
