<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Eshop;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eshop>
 */
class EshopFactory extends Factory
{

    protected $model = Eshop::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'url' => $this->faker->url,
            'tenant_id' => $this->faker->randomDigit,
        ];
    }
}
