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

<<<<<<< HEAD
Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1

Route::get('/denuncias', 'DenunciaController@index')->name('denuncias');

Route::get('/denuncias/crear', 'DenunciaController@create')->name('crear');

<<<<<<< HEAD
Route::post('/denuncias/comentar', 'DenunciaController@comentar')->name('crear');


Route::get('/noticias', 'NoticiasController@index')->name('noticia');

Route::get('/noticias/crear', 'NoticiasController@create')->name('crear1');



Route::get('/denuncias/responder', 'AdminDenuncias@index')->name('comentar1');

Route::get('/denuncias/show/{id}', 'AdminDenuncias@show')->name('comentar');

Route::get('/denuncias/write/{id}', 'AdminDenuncias@edit')->name('editar');


Route::post('denuncias', 'DenunciaController@store');

Route::post('noticias', 'NoticiasController@store');

Route::post('responder', 'DenunciaController@store');

Route::get('/chat', 'ChatController@index')->name('chat');

Route::post('chat', 'ChatController@store');
=======
Route::get('/chat', 'ChatController@index')->name('chat');

Route::post('denuncias', 'DenunciaController@store');
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
