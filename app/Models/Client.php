<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;
use Illuminate\Database\Eloquent\SoftDeletes;
class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=['nom','ville','pays'];

    public function commandes(){
        return $this->hasMany(Commande::class);
    }
}
