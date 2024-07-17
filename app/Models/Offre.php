<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $table='Offre';
    use HasFactory;

    public function Produits(){
        return $this->belongsToMany('Produit'::class);
    }
}
