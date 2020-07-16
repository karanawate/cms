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
Route::resource('categories','CategoriesController');
Route::resource('galleries','GalleriesController');
Route::resource('testimonials','TestimonialController');
Route::resource('clients','ClientlogoController');
Route::resource('contacts','ContactreportController');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
