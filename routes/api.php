<?php

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Mensajes;
=======

>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD


Route::get("mensajes", function(Request $request){
	$ListaMensajes = Mensajes::All();
	return $ListaMensajes;
});

=======
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
