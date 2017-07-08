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

    public function index()
    {
        $clientes = Cliente::orderBy('id', 'ASC')->paginate(10);

        return view('admin.clientes.index')->with('clientes', $clientes);
    }

    public function create()
    {
        return view('admin.clientes.create');
    }

    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente($request->all());
        $cliente->pass = bcrypt($request->pass);
        $cliente->rut_cliente = RUT::parse($request->rut_cliente)->format(RUT::FORMAT_WITH_DASH);
        $cliente->save();

        Session::flash('message_success', "Se ha registrado el cliente $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('admin.clientes.edit')->with('cliente', $cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        /*Valido manualmente con las mismas reglas de ClientRequest, 
        ya que si utilizo ClienteRequest me obliga usar el arreglo completo, 
        y en este caso, solo valido los campos que necesito*/

        $this->validate($request,[
                'nombre_cliente' => 'min:4|max:120|required',
                'direccion'      => 'max:100|required',
                'telefono'       => 'min:8|max:12|required|',
                'usuario'        => 'min:4|max:20|required|unique:clientes',
        ]);

        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->usuario = $request->usuario;
        
        $cliente->save();
        
        Session::flash('message_success', "Se ha modificado el cliente $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();  

        Session::flash('message_danger', "Se ha eliminado el cliente $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));
    }
}
