<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
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
            'nombre_usuario' => 'min:4|max:120|required',
            'rut_usuario' => 'max:12|required|unique:usuarios',
            'usuario' => 'min:4|max:20|required|unique:usuarios',
            'pass' => 'min:6|max:120|confirmed|required',
            'tipo' => 'required'
        ];
    }
}
