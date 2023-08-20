<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => fake()->title(),
            'description' => fake()->paragraph(3),
            'author_id'   => array_rand(Author::pluck('id','id')->toArray()),
            'category_id' => array_rand(Category::pluck('id','id')->toArray()),
            'user_id' => array_rand(User::pluck('id','id')->toArray())
        ];
    }
}
