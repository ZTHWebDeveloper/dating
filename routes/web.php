<?php

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
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutme/{id}','AboutMeController@show');

Route::post('/aboutme/{id}','AboutMeController@update');

Route::get('/send','DateController@send');

Route::get('/receive','DateController@receive');

Route::get('/gifts','GiftController@gifts');

Route::get('/gift_details','GiftController@gift_details');

Route::get('/profile/{id}','ProfileController@profile');

Route::get('/add_profile/{id}','ProfileController@add_profile'); 

Route::post('/add_profile/{id}','ProfileController@update_profile');

Route::get('/bookmarks/{id}','ProfileController@bookmarks');

Route::get('/bookshow/{id}','ProfileController@bookshow');

Route::get('/bookdetail/{id}','ProfileController@bookdetail');







