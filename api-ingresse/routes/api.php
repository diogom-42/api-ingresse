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

Route::group(array('prefix' =>'apiIngresse'), function(){
    Route::get('/', function () {
       return response()->json(['message' => 'API Ingresse', 'status' => 'Connected']);
    });
    Route::resource('users', 'UsersController');
 });
 
 Route::get('/', function () {
    return redirect('apiIngresse');
});