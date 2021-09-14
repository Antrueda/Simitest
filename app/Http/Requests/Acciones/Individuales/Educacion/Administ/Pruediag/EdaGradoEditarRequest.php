<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag;

use Illuminate\Foundation\Http\FormRequest;

class EdaGradoEditarRequest extends FormRequest
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
            's_grado.required' => 'Ingrese el nombre del grado',
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
            's_grado' =>['required'],
        ];
    }
}
