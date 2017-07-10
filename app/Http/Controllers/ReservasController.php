<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
Use App\Reserva;
use Illuminate\Support\Facades\Session;
use DB;


class ReservasController extends Controller
{
    public function index()
    {
      /*  $reservas = Reserva::orderBy('id', 'DSC')->paginate(10);*/

        $reservas = DB::table('reservas')
                    ->join('users', 'users.id', '=', 'reservas.id_us')
                    ->join('habitaciones', 'habitaciones.id', '=', 'reservas.id_ha')


                    ->select('users.name','users.rut', 'habitaciones.id', 'habitaciones.valor', 'reserva_comienza', 'reserva_termina')
                    ->get();

     //   dd($reservas);

        return view('admin.reservas.index', ['reservas'=>$reservas]);//->with('reservas', $reservas);
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
        dd($reservas);
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
        dd($reservas);
        $reservas->delete();

        Session::flash('message_success', "Se ha eliminado la reserva $reservas->id Existosamente!");
        return (route('admin.reservas.index'));
    }
}
