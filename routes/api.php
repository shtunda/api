<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::namespace('App\Http\Controllers')->group(function (){
Route::get('/users', 'UserController@getUsers');
Route::post('/users', 'UserController@apiStore');
Route::get('/users/{id}', 'UserController@getUserById');
Route::get('/positions', 'UserController@getPosition');
Route::get('/token', 'UserController@getToken');
});

