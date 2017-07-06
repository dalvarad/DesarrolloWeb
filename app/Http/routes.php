<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('inicio/index');
});

Route::get('quienessomos', function (){
	return view('quienessomos/index');
});

Route::get('hotel', function (){
	return view('hotel/index');
});

Route::get('habitaciones', function (){
	return view('habitaciones/index');
});

Route::get('contacto', function (){
	return view('contacto/index');
});

Route::group(['prefix' => 'admin'], function(){
	Route::resource('usuarios','UsuariosController');
	Route::get('usuarios/{id}/destroy', [
		'uses' => 'UsuariosController@destroy',
		'as' => 'admin.usuarios.destroy'
	]);

});
