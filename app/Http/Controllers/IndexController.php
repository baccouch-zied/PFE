<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRestaurant;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index()
    {
        $UserRestaurants= DB::table('user_restaurants')->orderBy('created_at','desc')->limit(4)->get();
        return view('front.index', compact('UserRestaurants'));
    }
}
