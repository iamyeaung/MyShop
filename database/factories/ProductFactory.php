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
        'name' => $this->faker->word,
        'logo'  => $this->faker->word,
        'image'=> $this->faker->imageUrl,
        'price'=> $this->faker->numberBetween(10000,90000),
        'discount'=> $this->faker->numberBetween(10,70),
        'in_instock'=> $this->faker->rand(0,1),
        'description'=> $this->faker->paragraph,
        'category_id'=> $this->faker->rand(1,10)
        ];
    }
}
