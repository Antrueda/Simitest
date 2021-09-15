<?php

namespace App\Http\Requests\Administracion\Parametros;

use Illuminate\Foundation\Http\FormRequest;

class ParametroAreaRequest extends FormRequest
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
        return [
            'nombre' => 'required_if:habilitar,1',
            'parametro_id' => 'required_if:nombre,null',
            'sis_esta_id' => 'required|exists:sis_estas,id'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required_if' => 'Debe ingresar un área de ajuste mientras que Nuevo este habilitado.',
        ];
    }
}
