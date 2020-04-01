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

Auth::routes();

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('service', function () {
    return view('service');
});
Route::get('blog', function () {
    return view('blog.index');
});
Route::get('login-admin', function () {
    return view('auth/logintemplate');
});

Route::post('login-admin','Auth\LoginController@login')->name('loginpost');
// VENUE SHOW
Route::resource('venue/','VenuessController');
Route::get('venue/{id}/show/', 'VenuessController@showing')->name('venue.show');

Route::resource('blog/','BlogsController');
Route::get('blog/{id}/show/', 'BlogsController@showing')->name('bloging.show');
Route::post('blog/','BlogsController@store')->name('blogs.store');

Route::resource('contact/','MessagesController');
Route::post('contact/','MessageController@store')->name('messages.store');



Route::get('/', 'HomeController@index')->name('home');

// Admin Dashboard
Route::resource('admin/dashboard','AdminController')->middleware('admin');

// Message
Route::resource('admin/message','MessageController')->middleware('admin');;

// Veneu
Route::resource('admin/veneu','VeneuController')->middleware('admin');;

// Blog
Route::resource('admin/blog','BlogController')->middleware('admin');

// Komentar
Route::resource('admin/komentar','KomentarController')->middleware('admin');;

// User
Route::resource('admin/user','UserController')->middleware('admin');;

