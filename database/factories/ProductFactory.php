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
            'name' => $this->faker->word(),
            'model' => $this->faker->word(),
            'weight' => $this->faker->randomFloat(2, 0.1, 100), // weight between 0.1 and 100
            'price' => $this->faker->randomFloat(2, 10, 1000), // price between 10 and 1000
            'discount' => $this->faker->numberBetween(0, 100), // discount between 0 and 100
            'description' => $this->faker->paragraph(),
            'final_quantity' => $this->faker->numberBetween(1, 100), // quantity between 1 and 100
        ];
    }
}
