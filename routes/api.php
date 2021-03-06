<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('save_settings','Admin\OptionController@save');
Route::post('save_anaylsis','Admin\AnaylsisController@save');
Route::post('profileupdate','Admin\ProfileController@saved');
Route::resource('testimonials','TestimonialController');
Route::post('testimonial','TestimonialController@deleted');
Route::post('/manydeletes','AdminController@deleted');
