<?php

namespace app\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\Asignatura;

use Illuminate\Foundation\Http\FormRequest;

class EdaAsignatuCrearRequest extends FormRequest
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
            's_asignatura.required' => 'Ingrese el nombre de la asignatura',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            's_asignatura' =>['required'],
        ];
    }
}
