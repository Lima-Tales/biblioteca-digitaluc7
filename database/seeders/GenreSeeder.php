<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{

    public function run()
    {
        Genre::create(['name' => 'Ficção']);
        Genre::create(['name' => 'Romance']);
    }
}
