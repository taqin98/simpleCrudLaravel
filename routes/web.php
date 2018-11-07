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

Route::get('/xxxx', function () {
    return view('welcome');
});


//Route siswa by taqin
Route::get('/', 'SiswaController@index');

Route::get('/siswa/create', 'SiswaController@create');

Route::get('/siswa/edit/{id}', 'SiswaController@edit');

Route::put('/{id}', 'SiswaController@update');

Route::post('/', 'SiswaController@store');

Route::get('/siswa/hapus/{id}', 'SiswaController@destroy');