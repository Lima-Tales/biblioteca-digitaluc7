<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => 'Romance'],
            ['name' => 'Ficção Científica'],
        ]);

        //
    }
}
