<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ReservaRequest;
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

                    ->select('reservas.*', 'users.name', 'habitaciones.valor')
                    ->orderBy('reservas.id','DESC')
                    ->get();

     //   dd($reservas);

        return view('admin.reservas.index')->with('reservas', $reservas);
    }



    public function create()
    {
        $lista_users = DB::table('users')
                    ->where('type','cliente')
                    ->orderBy('rut')
                    ->lists('rut', 'id');

        $lista_habitaciones = DB::table('habitaciones')
                            ->where('estado','desocupada')
                            ->orderBy('valor')
                            ->lists('valor', 'id');

      //  dd($lista_users);

        return view('admin.reservas.create')->with('lista_users',$lista_users)->with('lista_habitaciones', $lista_habitaciones);
    }



    public function store(ReservaRequest $request)
    {
        $reservas = new Reserva($request->all());
        $reservas-> save();

        Session::flash('message_success', "Se ha registrado la reserva Nº $reservas->id Existosamente!");
        return redirect(route('admin.reservas.index'));
    }



    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $reservas = Reserva::find($id);

        $lista_users = DB::table('users')
                     ->where('type','cliente')
                     ->orderBy('rut')
                     ->lists('rut', 'id');
        

        $lista_habitaciones = DB::table('habitaciones')
                            ->where('estado','desocupada')
                            ->orderBy('valor')
                            ->lists('valor', 'id');

        
        return view('admin.reservas.edit')->with('reservas', $reservas)->with('lista_habitaciones', $lista_habitaciones)->with('lista_users', $lista_users);
    }



    public function update(Request $request, $id)
    {
        $reservas = Reserva::find($id);

        $reservas->fill($request->all());
        $reservas->save();

        Session::flash('message_success', "Se ha modificado la reserva $reservas->id Exitosamente!");
        return redirect(route('admin.reservas.index'));
    }



    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();

        Session::flash('message_danger', "Se ha eliminado la reserva $reserva->id Exitosamente!");
        return redirect(route('admin.reservas.index'));
    }
}
