<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserLivreur extends Model
{
    use Notifiable;

    protected $fillable = [
        'name','prenom','telephone','email','password',
    ];

    public function categorie()
	{
		return $this->belongsToMany('App\categorie');
	}
}
