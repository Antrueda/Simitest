<?php

namespace App\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InIndicadorCrearRequest extends FormRequest
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

    public function messages()
    {
        return [
            's_indicador.required' => 'Ingrese el nombre del indicador',
            's_indicador.unique' => 'el indicador ya se encuentra en uso',
            'area_id.required' => 'el indicador ya se encuentra en uso',
        ];
    }

    /**
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {             
        return [
            's_indicador' => 'required|unique:in_indicadors,s_indicador',
            'area_id' =>'required',
        ];
    }

}
