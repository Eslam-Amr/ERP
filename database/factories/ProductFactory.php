<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'weight' => $this->faker->randomFloat(2, 0.1, 100),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'discount' => $this->faker->numberBetween(0, 100),
            'final_quantity' => $this->faker->numberBetween(1, 100),
            'en'=>[
                'name' => $this->faker->word(),
                'model' => $this->faker->word(),
                'description' => $this->faker->paragraph()
            ],
            'ar'=>[
                'name' => 'انا اسم عربي ',
                'model' => 'انا  عربي ',
                'description' => 'انا وصف عربي '
            ],
        ];
    }
}
// namespace Database\Factories;

// use App\Models\Product;
// use Illuminate\Database\Eloquent\Factories\Factory;

// class ProductFactory extends Factory
// {
//     protected $model = Product::class;

//     public function definition(): array
//     {
//         return [
//             'weight' => $this->faker->randomFloat(2, 0.1, 100),
//             'price' => $this->faker->randomFloat(2, 10, 1000),
//             'discount' => $this->faker->numberBetween(0, 100),
//             'final_quantity' => $this->faker->numberBetween(1, 100),
//         ];
//     }

//     public function configure()
//     {
//         return $this->afterCreating(function (Product $product) {
//             $product->translateOrCreate('en', [
//                 'name' => $this->faker->word(),
//                 'model' => $this->faker->word(),
//                 'description' => $this->faker->paragraph(),
//             ]);

//             $product->translateOrCreate('ar', [
//                 'name' => $this->faker->word(),
//                 'model' => $this->faker->word(),
//                 'description' => $this->faker->paragraph(),
//             ]);
//         });
//     }
// }
