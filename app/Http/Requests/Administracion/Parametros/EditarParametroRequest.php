<?php

namespace app\Http\Requests\Administracion\Parametros;

use Illuminate\Foundation\Http\FormRequest;

class EditarParametroRequest extends FormRequest
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
            'nombre' => 'required|string|unique:parametros,nombre,'.request()->id,
            'sis_esta_id' => 'required|exists:sis_estas,id'
        ];
    }
}
