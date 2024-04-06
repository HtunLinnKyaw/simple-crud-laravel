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
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->word,
            'category' => 'iPhone', // You can expand this with more categories of Apple products
            'product_color' => $this->faker->safeColorName,
            'price' => $this->faker->randomFloat(2, 400, 1500),
        ];
    }
}
