<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class v_registro_cliente extends FormRequest
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
            'identificador_cliente' => 'required|unique:cliente|max:15',
            'nombre_cliente' => 'required',
            'cuenta' => 'required',
        ];
    }
}
