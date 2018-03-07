<?php

namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;

class userCreateRequest extends Request
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
            'name' => 'required|min:7',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ];
    }
}
