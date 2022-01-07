<?php

namespace App\Http\Requests\Indicadores\Administ;

use Illuminate\Foundation\Http\FormRequest;

class   InLineaBaseEditarRequest extends FormRequest
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
        $reglasxx=[
            's_linea_base' => ['required',
            'unique:in_linea_bases,s_linea_base,'.$this->segments()[3]],
        ];
        return $reglasxx;
    }

    public function messages()
    {
        return [
            's_linea_base.required' => 'Ingrese el nombre de la línea bas',
            's_linea_base.unique' => 'La línea base ya se encuentra en uso',
        ];
    }
}
