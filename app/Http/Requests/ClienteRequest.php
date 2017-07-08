<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClienteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_cliente' => 'min:4|max:120|required',
            'rut_cliente'    => 'max:12|required|unique:clientes|cl_rut',
            'direccion'      => 'max:100|required',
            'telefono'       => 'min:8|max:12|required|',
            'usuario'        => 'min:4|max:20|required|unique:clientes',
            'pass'           => 'min:6|max:40|confirmed|required'
        ];
    }
}
