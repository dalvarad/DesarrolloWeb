<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Habitacion;
use Illuminate\Support\Facades\Session;

class HabitacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = Habitacion::orderBy('id', 'ASC')->paginate(10);

        return view('admin.habitaciones.index')->with('habitaciones', $habitaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.habitaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitaciones = new Habitacion($request->all());
        $habitaciones->save();

        Session::flash('message_success', "Se ha registrado la Habitacion Exitosamente!");
        return redirect(route('admin.habitaciones.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitaciones= Habitacion::find($id);
        return view ('admin.habitaciones.edit')->with('habitacion', $habitaciones);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $habitaciones = Habitacion::find($id);

        $habitaciones ->valor = $request->valor;
        $habitaciones ->estado = $request->estado;
        $habitaciones ->tipo_de_habitacion = $request->tipo_de_habitacion;

        $habitaciones ->save();

        Session::flash('message_success', "Se ha modificado la habitación correctamente Exitosamente!!");
        return redirect(route('admin.habitaciones.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion-> delete();

        Session::flash('message_danger', 'Se ha eliminado la Habitacion Exitosamente!!');
        return redirect(route('admin.habitaciones.index'));
    }
}
