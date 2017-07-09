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

<<<<<<< HEAD
Route::group(['prefix' => 'admin'], function()
{
	/*ruta de bienvenida*/
	Route::get('/admin', function () {
    	return view('admin/index');
	});

	/*rutas usuarios*/
=======
Route::group(['prefix' => 'admin'], function(){
	
	/*rutas users*/
>>>>>>> 9abb58acd389ca2e5e3e819f120f0dc5eafad631
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);

	/*rutas habitaciones*/
	Route::resource('habitaciones','HabitacionesController');
	Route::get('habitaciones/{id}/destroy', [
		'uses' => 'HabitacionesController@destroy',
		'as' => 'admin.habitaciones.destroy'
	]);	

	/*rutas clientes*/
	Route::resource('clientes','ClientesController');
	Route::get('clientes/{id}/destroy',[
		'uses' =>'ClientesController@destroy',
		'as' => 'admin.clientes.destroy'

		]);
});


/*Rutas de Autentificacion*/
Route::get('admin/auth/login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'admin.auth.login' 
]);

Route::post('admin/auth/login', [
	'uses' => 'Auth\AuthController@postLogin',
	'as' => 'admin.auth.login' 
]);

Route::get('admin/auth/logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'admin.auth.logout' 
]);
/*Fin Rutas Autentificación */

Route::auth();

Route::get('/home', 'HomeController@index');
