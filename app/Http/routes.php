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

Route::get('contacto', function (){
	return view('contacto/index');
});

/*rutas usuarios*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/', ['as' => 'admin.index', function (){
		return view('welcome');

	}]);
	
	/*rutas users*/
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
	/*rutas reservas*/
	Route::resource('reservas','ReservasController');
	Route::get('reservas/{id}/destroy',[
		'uses' =>'ReservasController@destroy',
		'as' => 'admin.reservas.destroy'
	]);	
});

Route::auth();
Route::get('/home', 'HomeController@index');