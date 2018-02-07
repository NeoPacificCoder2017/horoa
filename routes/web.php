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

Route::get('/users/new','UserController@new');


/*
*//*Corrigé car execute un checkAuth a la création
*/
Route::post('user','UserController@create');
/* */


Route::get('users/{userId}','UserController@show');
Route::get('users/{userId}/edit','UserController@edit');
Route::PUT('users/{userId}','UserController@update');
Route::delete('user/{userId}','UserController@destroy');

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
Route::PUT('modedons/{modedonId}','ModeDonController@update');
Route::delete('modedons/{modedonId}','ModeDonController@destroy');

/*
**ROUTE Entity_user_operation
*/
Route::get('useroperations','userOperationController@all');
Route::get('/useroperation/new', function(){
    return view('useroperation-form');
});
Route::post('useroperation','userOperationController@new');
Route::get('useroperation/{useroperationId}','userOperationController@show');
Route::get('useroperation/{useroperationId}/edit','userOperationController@edit');
Route::PUT('useroperation/{useroperationId}','userOperationController@update');
Route::delete('useroperation/{useroperationId}','userOperationController@destroy');

// Route documents
Route::get('documents', 'DocumentController@all');
Route::post('documents', 'DocumentController@create');
Route::get('documents/new', 'DocumentController@new');
Route::get('documents/{documentId}', 'DocumentController@show'); 
Route::get('documents/{documentId}/edit', 'DocumentController@edit');
Route::post('documents/{documentId}', 'DocumentController@update');
Route::delete('documents/{documentId}', 'DocumentController@destroy')->name('delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
