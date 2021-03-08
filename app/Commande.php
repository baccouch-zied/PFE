<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'lieu', 'date','etat','total','modePayement','id_client','id_restaurant','id_livreur'
    ];

    public function client()
	{
		return $this->belongsToMany('App\client');
	}

    public function restaurant()
	{
		return $this->belongsToMany('App\client');
	}

    public function livreur()
	{
		return $this->belongsToMany('App\client');
	}
}
    

