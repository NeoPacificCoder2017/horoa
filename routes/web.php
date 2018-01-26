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

//Routes Dons
Route::get('dons', 'DonController@all');
Route::get('dons/new', 'DonController@new');
Route::post('dons', 'DonController@create');
Route::get('dons/{donId}', 'DonController@show'); 
Route::get('dons/{donId}/edit', 'DonController@edit');
Route::post('dons/{donId}', 'DonController@update');
Route::delete('dons/{donId}', 'DonController@destroy')->name('delete');

//Routes Operations
Route::get('operations', 'OperationController@all');
Route::get('operations/new', 'OperationController@new');
Route::post('operations', 'OperationController@create');
Route::get('operations/{operationId}', 'OperationController@show'); 
Route::get('operations/{operationId}/edit', 'OperationController@edit');
Route::post('operations/{operationId}', 'OperationController@update');
Route::delete('operations/{operationId}', 'OperationController@destroy')->name('delete');