<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'Produit';

/*
    public function offres(){
        return $this->belongsToMany(Offre::class);
    }
*/
}
