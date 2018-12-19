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
Route::get('/actors','actorsController@index');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 1ca66ce42475c1806fd90104a3c44f5eaf1a7030
