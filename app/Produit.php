<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    
    protected $fillable = [
        'nom', 'prix','image','deetails','id_categorie'
    ];

    public function categorie()
	{
		return $this->belongsToMany('App\categorie');
	}
}
