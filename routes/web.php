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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('denuncias', 'DenunciaController@index')->name('denuncias.index');

Route::get('denuncias/crear', 'DenunciaController@create')->name('denuncias.create');

Route::post('denuncias', 'DenunciaController@store')->name('denuncias.store');

Route::get('chat', 'ChatController@create')->name('chat');