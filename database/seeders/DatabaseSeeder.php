<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\author;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Rating;
use Database\Factories\AuthorFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        author::factory(1000)->create();
        BookCategory::factory(3000)->create();
        Book::factory(1000)->create();
        Rating::factory(500)->create();
    }
}
