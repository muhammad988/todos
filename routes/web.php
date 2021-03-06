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

Route::get('/','AuthController@home' );
Route::get('/login','AuthController@getLogin' )->name('login');
Route::post('/login','AuthController@postLogin' );
Route::get('/logout','AuthController@logout' );
Route::resource('user','UserController' );
Route::resource('todo','TodoController' );
