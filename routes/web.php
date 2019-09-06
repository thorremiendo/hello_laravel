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


Route::get('/users', 'UsersController@index');
Route::get('users/1', 'UsersController@show');
Route::get('users/1/edit', 'UsersController@edit');
Route::post('users/1/delete', 'UsersController@destroy');
Route::post('users/1/update', 'UsersController@update');
Route::post('users/1/', 'UsersController@store');


