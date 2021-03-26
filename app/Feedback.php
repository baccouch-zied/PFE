<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'nom', 'feed' ,'date' ,'user_id'
    ];
}
