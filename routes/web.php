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

Route::get('/home', 'HomeController@index')->name('home');
Route::get( '/', 'Auth\LoginController@showLoginForm' );
Auth::routes();
Route::get( '/home', 'HomeController@index' ) ->name ( 'home' );
Route::resource('actors', 'ActorController');
Route::resource('medias', 'MediaController');
Route::resource('accounts', 'AccountController');
Route::resource('users', 'UserController');
Route::resource( 'choices', 'ChoiceController' );
Route::get('/register', 'AccountController@create')->name('register');
Route::post('/register', 'AccountController@store');
Route::get('/login/{id}', 'UserController@login')->name('userlogin');
Route::get( '/search', 'SearchController@search' ) -> name( 'search' );
// Route::get( '/home', 'HomeController@index' ) -> name( 'home' );
Route::post('/logout', 'AccountController@logout') -> name('logout');

Route::post( '/register', function ( $request ) {
    dd( 'this is /register route in post method. Not all those who wander are lost...' );
} );
