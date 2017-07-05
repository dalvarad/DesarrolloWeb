<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
    	//
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	$user = new Usuario($request->all());
    	$user->pass = bcrypt($request->pass);
    	$user->save();
    	dd('Usuario creado con exito');
    }
}
