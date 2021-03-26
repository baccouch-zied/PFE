<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categorie;
use App\UserRestaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $user= user::all();
        $categorie= categorie::all();
        return view('back.restaurant.index',compact(['user','categorie']));
    }
}
