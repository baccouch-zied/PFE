<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom', 'image'
    ];

    public function produit() 
    { 
        return $this->hasMany('App\produit');
    }


}
