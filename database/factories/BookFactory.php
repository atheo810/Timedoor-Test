<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BookCategory;
use App\Models\author;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_name' => $this->faker->sentence,
            'book_category_id' => BookCategory::inRandomOrder()->first()->id,
            'author_id' => author::inRandomOrder()->first()->id,
        ];
    }
}
