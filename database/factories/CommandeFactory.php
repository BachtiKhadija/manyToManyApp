<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
/**
 * @extends Factory<Commande>
 */
class CommandeFactory extends Factory
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

            'client_id'=>Client::inRandomOrder()->first()->id,
           'dateCommande' => fake()->dateTimeBetween('2025-12-31', '2026-03-01'),
        ];
    }
}
