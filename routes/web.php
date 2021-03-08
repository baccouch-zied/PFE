<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'LoginController@filtrage')->name('login');
Route::post('/login', 'LoginController@filtrage')->name('login');

Auth::routes();


Route::group(['middleware' =>['auth','RestaurantMiddleware']], function(){

    Route::get('/resto', 'RestaurantController@index');
    Route::resource('categorie','CategorieController');

   
});

Route::group(['middleware' =>['auth','AdminMiddleware']], function(){
    Route::get('/dash', function () {
        return view('back.admin.index');
    });
});


Route::group(['middleware' =>['auth','LivreurMiddleware']], function(){
    Route::get('/livreur', function () {
        return view('back.livreur.index');
    });
});



Route::get('/registerLivreur', 'RegisterLivreurController@index')->name('registerLivreur');
Route::post('/registerLivreur', 'RegisterLivreurController@create')->name('registerLivreur');

Route::get('/registerRestaurant', 'RegisterRestoController@index')->name('registerRestaurant');
Route::post('/registerRestaurant', 'RegisterRestoController@create')->name('registerRestaurant');

Route::get('/home', 'HomeController@index')->name('home');






