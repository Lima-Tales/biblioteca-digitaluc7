<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


     public function run()
    {
        Author::create(['name' => 'Machado de Assis']);
        Author::create(['name' => 'Clarice Lispector']);
    }

}
