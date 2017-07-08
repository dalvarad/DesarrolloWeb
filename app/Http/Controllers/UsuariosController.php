<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Usuario;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UsuarioRequest;
use Freshwork\ChileanBundle\Rut;


class UsuariosController extends Controller
{
    public function index()
    {
    	$usuarios = Usuario::orderBy('id', 'ASC')->paginate(10);

        return view('admin.usuarios.index')->with('usuarios', $usuarios);
    }

    public function create()
    {
    	return view('admin.usuarios.create');
    }

    public function store(UsuarioRequest $request)
    {
    	$usuarios = new Usuario($request->all());
    	$usuarios->pass = bcrypt($request->pass);
        $usuarios->rut_usuario = RUT::parse($request->rut_usuario)->format(RUT::FORMAT_WITH_DASH);
    	$usuarios->save();

        Session::flash('message_success', "Se ha registrado el usuario $usuarios->nombre_usuario Exitosamente!");
        return redirect(route('admin.usuarios.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id){
        $usuarios = Usuario::find($id);
        return view('admin.usuarios.edit')->with('usuarios', $usuarios);
    }

    public function update(Request $request, $id){
        
        $usuarios = Usuario::find($id);

        /*Valido manualmente con las mismas reglas de UsuariosRequest, 
        ya que si utilizo UsuariosRequest me obliga usar el arreglo completo, 
        y en este caso, solo valido los campos que necesito*/
        
        $this->validate($request,[
            'nombre_usuario' => 'min:4|max:120|required',
            'rut_usuario' => 'max:12|required|unique:usuarios|cl_rut',
            'usuario' => 'min:4|max:20|required|unique:usuarios',
            'tipo' => 'required'
        ]);

        $usuarios->nombre_usuario = $request->nombre_usuario;
        $usuarios->rut_usuario = $request->rut_usuario;
        $usuarios->usuario = $request->usuario;
        $usuarios->tipo = $request->tipo;

        $usuarios->save();
        
        Session::flash('message_success', "Se ha modificado el usuario $usuarios->nombre_usuario Exitosamente!");
        return redirect(route('admin.usuarios.index'));
     
    }

    public function destroy($id){
        $usuarios = Usuario::find($id);
        $usuarios->delete();    

        Session::flash('message_danger', "Se ha eliminado el usuario $usuarios->nombre_usuario Exitosamente!");
        return redirect(route('admin.usuarios.index'));
    }
}
