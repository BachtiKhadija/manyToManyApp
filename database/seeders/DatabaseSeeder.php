<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $clients=Client::factory()->count(10)->create();
        $commandes=Commande::factory()->count(20)->create();
        $produits=Produit::factory()->count(6)->create();
        //insert into commande_produit : n'existe pas 
        //l'alternatif est : 
        // attach commande to one or many produit ou inversement
        foreach($commandes as $commande){
           $ids=$produits->random(3)->pluck('id')->toArray();
           $commande->produits()->attach($ids,['quantite'=>fake()->numberBetween(10,100)]);

        }

        
        


        }
}
