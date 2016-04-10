<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/login/facebook' , 'Auth\AuthController@redirectToProvider');
Route::get('/login/facebook/callback' , 'Auth\AuthController@handleProviderCallback');

Route::get('/shop', 'ShopController@showShop');
Route::get('/addItem/{itemId}', 'ShopController@addItem');
Route::get('/removeItem/{itemId}', 'ShopController@removeItem');
Route::get('/buyItem/{itemId}', 'ShopController@buyItem');

Route::get('/top', 'TopScoreController@index');

Route::get('/game', function(){
		return view('game');
});



