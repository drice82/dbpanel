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
Route::get('/dbpanel', 'DbPanelController@index')->name('dbpanel');
Route::redirect('/', '/dbpanel', 301);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hotel/{name?}', 'HotelController@index')->name('hotel');
