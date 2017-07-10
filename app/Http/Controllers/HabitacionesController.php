<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Habitacion;
use Illuminate\Support\Facades\Session;

class HabitacionesController extends Controller
{

    public function index()
    {
        $habitaciones = Habitacion::orderBy('id', 'ASC')->paginate(10);

        return view('admin.habitaciones.index')->with('habitaciones', $habitaciones);
    }



    public function create()
    {
        return view('admin.habitaciones.create');
    }



    public function store(Request $request)
    {
        $habitaciones = new Habitacion($request->all());
        $habitaciones->save();

        Session::flash('message_success', "Se ha registrado la Habitacion Nº$habitaciones->id Exitosamente!");
        return redirect(route('admin.habitaciones.index'));
    }



    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        $habitaciones= Habitacion::find($id);
        return view ('admin.habitaciones.edit')->with('habitacion', $habitaciones);
    }



    public function update(Request $request, $id)
    {
        $habitaciones = Habitacion::find($id);

        $habitaciones ->valor = $request->valor;
        $habitaciones ->estado = $request->estado;
        $habitaciones ->tipo_de_habitacion = $request->tipo_de_habitacion;

        $habitaciones ->save();

        Session::flash('message_success', "Se ha modificado la habitación Nº$habitaciones->id Exitosamente!!");
        return redirect(route('admin.habitaciones.index'));

    }



    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion-> delete();

        Session::flash('message_danger', "Se ha eliminado la Habitacion Nº$habitacion->id Exitosamente!!");
        return redirect(route('admin.habitaciones.index'));
    }
}
