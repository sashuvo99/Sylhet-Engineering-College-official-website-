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

use App\Http\Controllers\NoticeController;

Route::get('/', "index@index");
Route::get('/notice',"NoticeController@index");
Route::get("/event","EventController@index");
Route::get("/event/{id}","EventController@show")->name('event');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
