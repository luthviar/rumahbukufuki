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
Route::get('/library', 'RumbukController@library');
Route::post('/library', 'RumbukController@store');
Route::get('/insert', 'RumbukController@create');
Route::get('/library/{kode}', 'RumbukController@show');
Route::get('/library/{kode}/edit', 'RumbukController@edit');
Route::put('/library/{kode}', 'RumbukController@update');
Route::delete('/library/{kode}', 'RumbukController@destroy');