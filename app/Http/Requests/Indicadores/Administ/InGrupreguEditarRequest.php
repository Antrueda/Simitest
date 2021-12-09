<?php

namespace App\Http\Requests\Indicadores\Administ;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class InGrupreguEditarRequest extends FormRequest
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
            'prm_disparar_id' => 'required|exists:parametros,id',
        ];
    }

    public function messages()
    {
        return [
            'prm_disparar_id.required'=>'Selecciones el tipo de pregunta.',
        ];
    }

}
