<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserRestaurant extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','telephone','email','password','confirmation_token'
    ];

    public function user()
	{
		return $this->belongsToMany('App\user');
	}
}

