<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
Use App\Reserva;
use Illuminate\Support\Facades\Session;


class ReservasController extends Controller
{
    public function index()
    {
        $reservas = Reserva::orderBy('id', 'ASC')->paginate(10);

        return view('admin.reservas.index')->with('reservas', $reservas);
    }



    public function create()
    {
        return view('admin.reservas.create');
    }



    public function store(Request $request)
    {
        $reservas = new Reserva($request->all());
        $reservas-> save();

        Session::flash('message_success', "Se ha registrado la reserva Nº $reservas->id Existosamente!");
        return redirect(route('admin.reservas.index'));
    }



    public function show($id)
    {
        
    }



    public function edit($id)
    {
        $reservas = Reserva::find($id);
        return view('admin.reservas.edit')-with('reservas', $reservas);
    }



    public function update(Request $request, $id)
    {
        $reservas = Reserva::find($id);

        $reservas->id_us = $request->id_us;
        $reservas->id_ha = $request->id_ha;
        $reservas->reserva_comienza = $request->reserva_comienza;
        $reservas->reserva_termina = $request->reserva_termina;

        $reservas->save();

        Session::flash('message_success',"Se ha modificado la reserva Nº $reservas->id Existosamente!");
        return (route('admin.reservas.edit'));
    }



    public function destroy($id)
    {
        $reservas = Reserva::find($id);
        $reservas->delete();

        Session::flash('message_success', "Se ha eliminado la reserva $reservas->id Existosamente!");
        return (route('admin.reservas.index'));
    }
}
