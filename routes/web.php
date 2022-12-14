<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('App\Http\Controllers')->group(function (){
    Route::get('/', 'UserController@index')->name('index');
    Route::get('/post', 'UserController@form')->name('form');
    Route::post('/post', 'UserController@store')->name('store');
});




