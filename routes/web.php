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

Route::get('/', 'CustomersController@index' );
Route::post('/customers/{id}', 'CustomersController@update');
Route::get('/customers/{user}', 'CustomersController@show');

Route::get('/signup', 'EmailsController@create');
Route::post('/emails', 'EmailsController@email');

