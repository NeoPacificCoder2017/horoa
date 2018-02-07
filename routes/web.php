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

/*
**ROUTE Entity_USERS
*/
Route::get('users','UserController@all');
Route::get('/users/new',function (){
    return view('user-form');
});
Route::post('users/new','UserController@new');
Route::get('users/{userId}','UserController@show');
Route::get('users/{userId}/edit','UserController@edit');
Route::post('users/{userId}','UserController@update');

/*
**ROUTE Entity_ModeDon
*/
Route::get('modedons','ModeDonController@all');
Route::get('/modedon/new', function(){
    return view('modedon-form');
});
Route::post('modedon','ModeDonController@new');
Route::get('modedon/{modedonId}','ModeDonController@show');
Route::get('modedon/{modedonId}/edit','ModeDonController@edit');
Route::post('modedons/{modedonId}','ModeDonController@update');
Route::delete('modedons/{modedonId}','ModeDonController@destroy');




