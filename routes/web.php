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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/dashboard/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/dashboard/profile/update', 'ProfileController@update')->name('profile.update');
Route::get('/dashboard/profile/{username}', 'ProfileController@show')->name('profile.show');
Route::get('/user', 'ProfileController@index')->name('user');

Route::resource('/posts', 'PostController');


