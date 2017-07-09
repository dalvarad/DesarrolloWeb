<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UserRequest;
use Freshwork\ChileanBundle\Rut;


class UsersController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('id', 'ASC')->paginate(10);

        return view('admin.users.index')->with('users', $users);
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
    	$users = new User($request->all());
    	$users->password = bcrypt($request->password);
        $users->rut = RUT::parse($request->rut)->format(RUT::FORMAT_WITH_DASH);
    	$users->save();

        Session::flash('message_success', "Se ha registrado el usuario $users->name Exitosamente!");
        return redirect(route('admin.users.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id){
        $users = User::find($id);
        return view('admin.users.edit')->with('users', $users);
    }

    public function update(Request $request, $id){
        
        $users = User::find($id);

        /*Valido manualmente con las mismas reglas de UsersRequest, 
        ya que si utilizo UsersRequest me obliga usar el arreglo completo, 
        y en este caso, solo valido los campos que necesito*/
        
        $this->validate($request,[
            'name' => 'min:4|max:120|required',
            'email' => 'required',
            'type' => 'required'
        ]);

        $users->name = $request->name;
        $users->rut = $request->rut;
        $users->email = $request->email;
        $users->type = $request->type;

        $users->save();
        
        Session::flash('message_success', "Se ha modificado el usuario $users->name Exitosamente!");
        return redirect(route('admin.users.index'));
     
    }

    public function destroy($id){
        $users = User::find($id);
        $users->delete();    

        Session::flash('message_danger', "Se ha eliminado el usuario $users->name Exitosamente!");
        return redirect(route('admin.users.index'));
    }
}