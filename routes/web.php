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
    return view('home_pg');
});


Route::get('/trial', function () {
    return view('trial');
});

Route::get('/home', function () {
    return view('home_pg');
});

Route::get('/hm', function () {
    return view('home_pg');
});

// Route::get('/', PagesController@log_in);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/go', 'requestController@show');

Route::get('/offer', function () {
    return view('offer');
});

// Route::get('/find', function () {
//     return view('find');
// });

Route::get('/log_in', function () {
    return view('log_in');
});

Route::get('/faq', function () {
    return view('faq');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::post('/requests', 'requestController@index');
// Route::post('/requests', 'requestController@store');
//Route::post('/requests/create', 'requestController@create');
// Route::post('/requests/{req}', 'requestController@show');
Route::resource('/requests','requestController');
Route::resource('/offers','OfferController');
Route::resource('/confirm','ConfirmController');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');
//Route::resource('rides','RideController');