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

// Route::get('/',function(){
// 	return view('welcome');
// });

Route::get('/','HomesController@index')->name('home');
Route::get('/aim','UsersController@aim')->name('aim');
Route::post('/aim','UsersController@postaim')->name('user.aim');
Route::get('/dashboard','HomesController@dashboard')->name('dashboard');

Route::get('/lease','HomeOwnersController@lease')->name('lease');

Auth::routes();