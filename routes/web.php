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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/apps', 'AppController@index')->name('apps');

Route::get('/categories', 'CategoryController@Index')->name('categoriesList');

Route::get('/category/{category}', 'AppController@indexByCategory')->name('appsByCategory');

Route::get('/appDetail/{id}', 'AppController@show')->name('appDetail');

Route::get('/logout', 'UserController@logout')->name('userLogout')->middleware('login');;

Route::get('/me/appCreate', 'AppController@create')->name('appCreate')->middleware('admin:admin');;

Route::post('/me/appCreate', 'AppController@store')->name('appStore')->middleware('admin:admin');;

Route::get('/me/appUpdate/{id}', 'AppController@edit')->name('appEdit')->middleware('admin:admin');;

Route::put('/me/appUpdate/{id}', 'AppController@update')->name('appUpdate')->middleware('admin:admin');;

Route::delete('/me/appDelete', 'AppController@destroy')->name('appDelete')->middleware('admin:admin');;

Route::get('/me/apps/{id}', 'UserController@appList')->name('appList')->middleware('login');;





