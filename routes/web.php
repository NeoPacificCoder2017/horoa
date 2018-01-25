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

Route::get('dons', 'DonController@all');
Route::get('dons/new', 'DonController@new');
Route::post('dons', 'DonController@create');
Route::get('dons/{donId}', 'DonController@show'); 
Route::get('dons/{donId}/edit', 'DonController@edit');
Route::put('dons/{donId}', 'DonController@update');

