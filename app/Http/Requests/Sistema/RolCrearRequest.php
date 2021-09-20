<?php

namespace app\Http\Requests\Sistema;

use Illuminate\Foundation\Http\FormRequest;

class RolCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'name.required' => 'Ingrese el nombre del Rol',
            'name.unique' => 'El Rol ya se encuentra en uso',
            'estusuario_id.unique' => 'Seleccione una justificación para el registro',
        ];
        $this->_reglasx = [
            'name' =>
            [
                'required',
                'unique:roles,name,'
            ],
            'estusuario_id' =>
            [
                'required',
            ],
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
