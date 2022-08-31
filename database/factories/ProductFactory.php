<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->unique()->word,
            'sabor' => fake()->colorName,
            'preco' => fake()->randomFloat(2, 1, 10),
            'descricao' => fake()->name(),
            'foto' => fake()->imageUrl(),
        ];
    }
}
