<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "blog_title" => fake()->realTextBetween(10, 30),
            "blog_description"=>fake()->realTextBetween(500, 2000),
            "blog_image"=> fake()->imageUrl(fake()->numberBetween(500, 1000),fake()->numberBetween(500, 1000), fake()->realTextBetween(20,40)),
            'user_id'=>fake()->numberBetween(1, 20),
            'created_at'=>fake()->dateTimeThisYear(),
        ];
    }
}
