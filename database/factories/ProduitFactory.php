<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nom'=>fake()->randomElement(['ordinateur','scanner','phone']),
            'unité'=>fake()->numberBetween(10,100),
            'prix'=>fake()->randomFloat(2,100,1000),

        ];
    }
}
