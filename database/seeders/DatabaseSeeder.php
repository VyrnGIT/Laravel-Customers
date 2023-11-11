<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SpelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\Author::factory(5)->create()->each(function ($author) {
            $author->books()->saveMany(\App\Models\Book::factory(3)->make());
        });
    }
}
