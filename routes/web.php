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
Route::get('anaylsis', function(){
    // $options = \DB::select(
    //     "SELECT name, data FROM options"
    // );
    // $options = collect($options);
    // dd($options);
    // $options = $options->mapWithKeys(function($row){
    //     return [$row->name => $row->data];
    // });
    $options = \DB::select(
        "SELECT name, data from options"
    );
      $optionss = collect($options);
    dd($options);
    //dd($optionss);

    return view('admin.settings.anaylsis.create', compact('options'));
});

Route::get('general', function(){
    $options = \DB::select(
        "SELECT name, data FROM options"
    );
    $options = collect($options);
    $options = $options->mapWithKeys(function($row){
        return [$row->name => $row->data];
    });
    // return $options;
    return view('admin.settings.create', compact('options'));
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
Route::resource('admin', 'AdminController');

Route::get('subs', function(){
    if (Gate::allows('subs-only', Auth::user())) {
            return view('sub');
    }else
    {
        return  "You are not subscriber";
    }
});






