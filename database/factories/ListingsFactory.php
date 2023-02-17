<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class ListingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'tags' => fake()->name(),
            'company' => fake()->company(),
            'location' => fake()->name(),
            'price' => fake()->randomNumber(),
            'description' => fake()->paragraph(),
        ];
    }


}
