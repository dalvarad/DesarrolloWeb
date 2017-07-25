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


/*Usa el controlador DatosController para mostrar datos de las habitaciones en la base de datos*/
Route::get('habitaciones',[
	'as'   => 'habitaciones.index',
	'uses' => 'DatosController@index' 
]);


/*Administarcion de Rutas*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){


/*Ruta Principal*/
	Route::get('/', ['as' => 'admin.index', function (){
		return view('welcome');

	}]);
	
/*Ruta PDF*/
	Route::get('pdf', function(){
		$users = App\User::all()->where('type', 'cliente');

		$pdf = PDF::loadView('admin.vista', ['users' => $users]);
		return $pdf->download('archivo.pdf');
	});


/* Rutas Usuarios*/

	Route::post('users',[
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'UsersController@store',
		'as' => 'admin.users.store'
	]);

	Route::get('users',[
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'UsersController@index',
		'as' => 'admin.users.index'
	]);

	Route::get('users/create',[
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'UsersController@create',
		'as' => 'admin.users.create'
	]);

	Route::get('users/{id}/destroy', [
		'middleware' => ['isAdministrador'],
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);

	Route::delete('users/{users}', [
		'middleware' => ['isAdministrador'],
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);

	Route::put('users/{users}', [
		'middleware' => ['isAdministrador'],
		'uses' => 'UsersController@update',
		'as' => 'admin.users.update'
	]);

	Route::get('users/{users}', [
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'UsersController@show',
		'as' => 'admin.users.show'
	]);

	Route::get('users/{users}/edit', [
		'middleware' => ['isAdministrador'],
		'uses' => 'UsersController@edit',
		'as' => 'admin.users.edit'
	]);

/* Rutas Habitaciones*/

	Route::post('habitaciones',[
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'HabitacionesController@store',
		'as' => 'admin.habitaciones.store'
	]);

	Route::get('habitaciones',[
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'HabitacionesController@index',
		'as' => 'admin.habitaciones.index'
	]);

	Route::get('habitaciones/create',[
		'middleware' => ['isAdministrador'],
		'uses' => 'HabitacionesController@create',
		'as' => 'admin.habitaciones.create'
	]);

	Route::get('habitaciones/{id}/destroy', [
		'middleware' => ['isAdministrador'],
		'uses' => 'HabitacionesController@destroy',
		'as' => 'admin.habitaciones.destroy'
	]);

	Route::delete('habitaciones/{habitaciones}', [
		'middleware' => ['isAdministrador'],
		'uses' => 'HabitacionesController@destroy',
		'as' => 'admin.habitaciones.destroy'
	]);

	Route::put('habitaciones/{habitaciones}', [
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'HabitacionesController@update',
		'as' => 'admin.habitaciones.update'
	]);

	Route::get('habitaciones/{habitaciones}', [
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'HabitacionesController@show',
		'as' => 'admin.habitaciones.show'
	]);

	Route::get('habitaciones/{habitaciones}/edit', [
		'middleware' => ['isAdministrador', 'isRecepcionista'],
		'uses' => 'HabitacionesController@edit',
		'as' => 'admin.habitaciones.edit'
	]);

/* Rutas Reservas*/

	Route::post('reservas',[
		'middleware' => ['isAdministrador', 'isRecepcionista', 'isCliente'],		
		'uses' => 'ReservasController@store',
		'as' => 'admin.reservas.store'
	]);

	Route::get('reservas',[
		'middleware' => ['isAdministrador', 'isRecepcionista', 'isCliente'],		
		'uses' => 'ReservasController@index',
		'as' => 'admin.reservas.index'
	]);

	Route::get('reservas/create',[
		'middleware' => ['isAdministrador', 'isRecepcionista', 'isCliente'],		
		'uses' => 'ReservasController@create',
		'as' => 'admin.reservas.create'
	]);

	Route::get('reservas/{id}/destroy', [
		'middleware' => ['isAdministrador', 'isRecepcionista', 'isCliente'],		
		'uses' => 'ReservasController@destroy',
		'as' => 'admin.reservas.destroy'
	]);

	Route::delete('reservas/{reservas}', [
		'middleware' => ['isAdministrador', 'isRecepcionista', 'isCliente'],		
		'uses' => 'ReservasController@destroy',
		'as' => 'admin.reservas.destroy'
	]);

	Route::put('reservas/{reservas}', [
		'middleware' => ['isAdministrador', 'isRecepcionista', 'isCliente'],		
		'uses' => 'ReservasController@update',
		'as' => 'admin.habitaciones.update'
	]);

	Route::get('reservas/{reservas}', [
		'middleware' => ['isAdministrador', 'isRecepcionista', 'isCliente'],		
		'uses' => 'ReservasController@show',
		'as' => 'admin.reservas.show'
	]);

	Route::get('reservas/{reservas}/edit', [
		'middleware' => ['isAdministrador', 'isRecepcionista', 'isCliente'],		
		'uses' => 'ReservasController@edit',
		'as' => 'admin.reservas.edit'
	]);	

});

Route::auth();
Route::get('/home', 'HomeController@index');




