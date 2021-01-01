<?php


//   User manualy do get request
Route::get('/', ['as'=>'index', 'uses'=>'HomeController@index']);
Route::get('/index', ['as'=>'index', 'uses'=>'HomeController@index']);
Route::get('/home', ['as'=>'home', 'uses'=>'HomeController@index']);



//  Login Controler
Route::get('/publicprofile', ['as'=>'public_profile', 'uses'=>'LoginController@publicprofile']);
Route::get('/ownprofile', ['as'=>'own_profile', 'uses'=>'LoginController@ownprofile']);
Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@index']);
Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@logcheck']);
Route::get('/logout', ['as'=>'logout', 'uses'=>'LogoutController@index']);


//  Registration Controler
Route::get('/registration', ['as'=>'registration', 'uses'=>'RegistrationController@index']);
Route::post('/registration', ['as'=>'registration', 'uses'=>'RegistrationController@registrationCheck']);



//  Home Controler
Route::get('/cart', ['as'=>'cart', 'uses'=>'HomeController@cart']);
Route::get('/search', ['as'=>'search', 'uses'=>'HomeController@search']);



/*Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@login']);

Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@logcheck']);

Route::get('/registration', ['as'=>'registration', 'uses'=>'RegistrationController@registration']);

Route::post('/registration', ['as'=>'registration', 'uses'=>'RegistrationController@registrationcheck']);

Route::get('/restaurantshow', ['as'=>'restaurant.restaurantshow', 'uses'=>'HomeController@restaurantshow']);

Route::get('/restaurantshowdetail', ['as'=>'restaurant.restaurantshowdetail', 'uses'=>'HomeController@restaurantshowdetail']);

Route::get('/profileown', ['as'=>'profileown', 'uses'=>'HomeController@profileown']);*/


