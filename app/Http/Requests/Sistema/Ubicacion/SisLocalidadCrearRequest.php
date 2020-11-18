<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;

class SisLocalidadCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_localidad.required' => 'Ingrese el nombre del localidad',
            's_localidad.unique' => 'la localidad ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_localidad' =>
            [
                'required',
                'unique:sis_localidads,s_localidad',
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
