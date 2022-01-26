<?php

namespace App\Http\Requests\Indicadores\Administ;

use Illuminate\Foundation\Http\FormRequest;

class InIndicadoCrearRequest extends FormRequest
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
            's_indicador' => ['required',
            'unique:in_indicados,s_indicador'],
         
        ];
    }

    public function messages()
    {
        return [
            's_indicador.required' => 'Ingrese el nombre del indicador',
            's_indicador.unique' => 'el indicador ya se encuentra en uso',
        ];
    }

}
