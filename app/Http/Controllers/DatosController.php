<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Habitacion;

class DatosController extends Controller
{
    public function index(Request $request)
    {
    	$habitaciones = Habitacion::search($request->tipo_de_habitacion)->orderBy('valor', 'ASC')->paginate(10);
    	return view('habitaciones.index')->with('habitaciones', $habitaciones);
    }
}
