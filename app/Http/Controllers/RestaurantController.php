<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserRestaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $users= user::all();
        return view('back.restaurant.index',compact('users'));
    }
}
