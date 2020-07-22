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
Route::resource('testimonials','TestimonialController')->middleware(['auth']);
Route::resource('clients','ClientlogoController');
Route::resource('contacts','ContactreportController');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profile', 'profileController');

Route::get('subs', function(){
    if (Gate::allows('subs-only', Auth::user())) {
            return view('sub');
    }else
    {
        return  "You are not subscriber";
    }
});

// email test url

Route::get('/send-mail', function(){
    $details = [
            'title' =>'this is my mail',
            'body' =>'hey hello'
        ];
        \Mail::to('karanawate8@gmail.com')->send(new \App\Mail\TestMail($details));
        echo "Email has been sent";

});


