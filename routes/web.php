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

Route::get('users','UserController@all');


Route::get('/users/new',function (){

    return view('user-form');

});

Route::post('users/new','UserController@new');
Route::post('{userID}','UserController@update');

Route::get('users/{userId}','UserController@show');

Route::get('users/{userId}/edit','UserController@edit');




