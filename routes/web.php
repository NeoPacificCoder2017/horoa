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

//Routes ProfilesTypes
Route::get('profilestypes', 'ProfileTypeController@all');
Route::get('profilestypes/new', 'ProfileTypeController@new');
Route::post('profilestypes', 'ProfileTypeController@create');
Route::get('profilestypes/{profiletypeId}', 'ProfileTypeController@show'); 
Route::get('profilestypes/{profiletypeId}/edit', 'ProfileTypeController@edit');
Route::post('profilestypes/{profiletypeId}', 'ProfileTypeController@update');
Route::delete('profilestypes/{profiletypeId}', 'ProfileTypeController@destroy')->name('delete');