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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/actors','actorController@index');
=======


>>>>>>> bc5937dbea01aa55d272f6e6eb5807cd49bea5bf
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::resource('account','AccountController');
=======
// Route::resource( 'accounts', 'AccountController' );
// Route::get( 'accounts/{account}/delete', 'AccountController@delete' ) -> name( 'accounts.delete' );

Route::resource( 'actors', 'ActorController' );
Route::get( 'actors/{actor}/delete', 'ActorController@delete' ) -> name( 'actors.delete' );

// Route::get('actors/{id}', 'ActorController@show');

>>>>>>> bc5937dbea01aa55d272f6e6eb5807cd49bea5bf
