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

Route::get( '/', 'Auth\LoginController@showLoginForm' );
Auth::routes();
Route::resource('actors', 'ActorController');
Route::resource('medias', 'MediaController');
Route::resource('accounts', 'AccountController');
Route::resource('users', 'UserController');
Route::resource( 'choices', 'ChoiceController' );
Route::get( '/search', 'SearchController@search' ) -> name( 'search' );
