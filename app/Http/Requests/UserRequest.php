<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'min:4|max:120|required',
            'rut' => 'max:12|required|unique:users|cl_rut',
            'email' => 'min:5|max:120|required|unique:users|email',
            'password' => 'min:6|max:40|confirmed|required',
            'type' => 'required'
        ];
    }
}
