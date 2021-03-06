<?php

namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;

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
            'nombre'=>'required|min:3',
            'apellido'=>'required|min:3',
            'telefono'=>'required|min:10', 
            'profesion_id'=>'required|integer',
            'email'=>'required|email|unique:clientes',
        ];
    }
}
