<?php

namespace App\Http\Requests\Administracion\Parametros;

use Illuminate\Foundation\Http\FormRequest;

class CrearTipoAtencionParametroRequest extends FormRequest
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
            'nombre' => [
                'required',
                'string' 
            ],
            'sis_esta_id' => 'required|exists:sis_estas,id'
        ];
    }

}
