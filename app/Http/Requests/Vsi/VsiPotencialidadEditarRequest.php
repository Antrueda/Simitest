<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiPotencialidadEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'potencialidad.required' => 'Ingrese la potencialidad',
        ];
        $this->_reglasx = [
            'potencialidad' => 'required|string|max:120'
        ];
    }
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
        return $this->_mensaje;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
