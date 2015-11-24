<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
/
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/','FrontController@index');
Route::get('usuario','FrontController@usuario');

Route::get('taxista','FrontController@taxista');

Route::get('admin','FrontController@admin');
Route::get('cliente','FrontController@cliente');


Route::resource('USUARIO','UsuarioController');

Route::resource('taxista','TaxistaController');

Route::resource('taxis','TaxisController');

Route::resource('reserva','ReservaController');

Route::resource('dirrecion','DireccionController');

Route::resource('log','LogController');
Route::resource('usr','UsrController');

Route::get('logout','LogController@logout');



/*
Route::get('controlador','PruebaController@index');

Route::resource('usuario','UsuarioController');


Route::get('prueba', function () {
    return "hola muno papapapa";
});

Route::get('nombre/{nombre}',function($nombre)
{
return "hola mi nombre".$nombre;

});



Route::get('/', function () {
    return view('welcome');
});
*/
