<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Edupresa;

use Illuminate\Foundation\Http\FormRequest;

class EdupresaEditarRequest extends FormRequest
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
            'eda_asignatu_id.required' => 'Seleccione una asignatura',
            'eda_presaber_id.required' => 'Seleccione un presaber',

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
            'eda_asignatu_id' =>['required'],
            'eda_presaber_id' =>['required'],
        ];
    }
}
