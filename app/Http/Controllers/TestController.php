<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Recepcionista;

class TestController extends Controller
{
    public function view($id){
    	$recep = Recepcionista::find($id);
    	dd($recep);
    }
}
