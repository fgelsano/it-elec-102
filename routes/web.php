<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'FrontController@index');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/profile', 'ProfilesController@show')->name('profile');
Route::get('/blogs', 'BlogsController@index');
Route::post('/blogs/add', 'BlogsController@create');
Route::resource('/restful','RestfulController');