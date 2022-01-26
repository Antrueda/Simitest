<?php

namespace App\Http\Requests\Indicadores\Administ;

use Illuminate\Foundation\Http\FormRequest;

class   InIndicadoEditarRequest extends FormRequest
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
            's_indicador' => ['required',
            'unique:in_indicados,s_indicador,'.$this->segments()[3]],
        ];
        return $reglasxx;
    }

    public function messages()
    {
        return [
            's_indicador.required' => 'Ingrese el nombre del indicador',
            's_indicador.unique' => 'el indicador ya se encuentra en uso',
        ];
    }
}
