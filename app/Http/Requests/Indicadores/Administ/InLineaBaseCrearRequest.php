<?php

namespace App\Http\Requests\Indicadores\Administ;

use Illuminate\Foundation\Http\FormRequest;

class InLineaBaseCrearRequest extends FormRequest
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
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            's_linea_base' => ['required',
            'unique:in_linea_bases,s_linea_base'],
         
        ];
    }

    public function messages()
    {
        return [
            's_linea_base.required' => 'Ingrese el nombre de la línea base',
            's_linea_base.unique' => 'La línea base ya se encuentra en uso',
        ];
    }

}
