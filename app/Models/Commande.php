<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Produit;
class Commande extends Model
{
    /** @use HasFactory<\Database\Factories\CommandeFactory> */
    use HasFactory;
    protected $fillable=['client_id','dateCommande'];
    //handel relationship one to many between clients et commandes
    public function client(){
        return $this->belongsTo(Client::class);
    }
    //handel relationship many to many between produits et commandes
     public function produits(){
        return $this->belongsToMany(Produit::class)->withPivot('quantite')->withTimestamps();
    }
}
