<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();


Route::get('/','MainController@index');
Route::get('/broadcast','MainController@broadcast');

Route::get('modem','ModemController@index');
Route::get('modem/dir','ModemController@directory');

Route::get('anggota/{id}','AnggotaController@show');
Route::get('anggota/page/{id}','AnggotaController@index');

Route::get('pengurus/{id}','PengurusController@show');
Route::get('pengurus/page/{id}','PengurusController@index');