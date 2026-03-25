<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;

class Produit extends Model
{
    /** @use HasFactory<\Database\Factories\ProduitFactory> */
    use HasFactory;
    protected $fillable=['nom','unité','prix'];
    public function commandes(){
        return $this->belongsToMany(Commande::class)->withPivot('quantite')->withTimestamps();;
    }
}
