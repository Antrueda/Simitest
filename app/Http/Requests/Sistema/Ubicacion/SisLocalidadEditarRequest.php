<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;
class SisLocalidadEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_localidad.required' => 'Ingrese el nombre de la localidad',
            's_localidad.unique' => 'la localidad ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_localidad' =>
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
        $this->_reglasx['s_localidad'][1]='unique:sis_localidads,s_localidad,'.$this->segments()[2];
        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
