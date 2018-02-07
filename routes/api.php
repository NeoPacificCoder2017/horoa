<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List operations
Route::get('operations','OperationController@index');

//List single operation
Route::get('operation/{id}','OperationController@showOperation');

//Creat new operation
Route::post('operation','OperationController@store');

//Update operation
Route::put('operation','OperationController@store');

//Destroy operation
Route::delete('operation/{id}','OperationController@destroyOperation');