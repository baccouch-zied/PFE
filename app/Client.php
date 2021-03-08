<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'telephone','adresse'
    ];

    public function commande() 
    { 
        return $this->hasMany('App\commande');
    }
}
