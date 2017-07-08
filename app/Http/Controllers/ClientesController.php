<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cliente;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ClienteRequest;
use Freshwork\ChileanBundle\Rut;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'ACS')->paginate(10);

        return view('admin.clientes.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente($request->all());
        $cliente->pass = bcrypt($request->pass);
        $cliente->rut_cliente = RUT::parse($request->rut_cliente)->format(RUT::FORMAT_WITH_DASH);
        $cliente->save();

        Session::flash('message_success', "Se ha registrado el usuario $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));
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
        $cliente = Cliente::find($id);
        return view('admin.clientes.edit')->with('cliente', $cliente);
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
        $cliente = Cliente::find($id);
    
        $cliente->nombre_cliente = $request->nombre_cliente;

        $this->validate($request,[
            'rut_cliente' => 'cl_rut'
        ]);

        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->usuario = $request->usuario;
        
        $cliente->save();
        
        Session::flash('message_success', "Se ha modificado el cliente $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();  

        Session::flash('message_danger', "Se ha eliminado el cliente $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));
    }
}
