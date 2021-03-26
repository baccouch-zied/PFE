<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'name', 'prenom', 'telephone','heure','produits','email','adresse','commentaire','user_id','userrestaurant_id','userlivreur_id'
    ];

    public function client()
	{
		return $this->belongsToMany('App\client');
	}

    public function userrestaurant()
	{
		return $this->belongsToMany('App\UserRestaurant');
	}

    public function userlivreur()
	{
		return $this->belongsToMany('App\UserLivreur');
	}
}
