<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
        ['name' => 'Jane Austen', 'nationality' => 'British'],
        ['name' => 'Gabriel García Márquez', 'nationality' => 'Colombian'],
    ]);
}
}
