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
Route::get('settings', function(){
    return view('admin.settings.create');
});
Route::resource('categories','CategoriesController');
Route::resource('galleries','GalleriesController');
Route::resource('testimonials','TestimonialController');
Route::resource('clients','ClientlogoController');
Route::resource('contacts','ContactreportController');
Route::resource('reports', 'ReportController')->middleware(['auth']);
Route::resource('user-number', 'userNumberController');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profile', 'profileController');
Route::resource('role', 'RoleController');
Route::resource('admins', 'AdminController');

Route::get('subs', function(){
    if (Gate::allows('subs-only', Auth::user())) {
            return view('sub');
    }else
    {
        return  "You are not subscriber";
    }
});






