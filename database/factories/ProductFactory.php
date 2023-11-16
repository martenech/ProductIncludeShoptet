<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => fake()->randomDigit(),
            'name' => fake()->word(),
            'shortDescription' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'manufacturer' => fake()->word(),
            'adult' => 1,
            'itemType' => 'product',
            'url' => fake()->url(),
            'visible' => 1,
            'eshop_id' => 1,
            'tenant_id' => 1,
        ];

    }
}
