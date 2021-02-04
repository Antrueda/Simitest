<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;
class SisDepartamEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_departamento.required' => 'Ingrese el nombre del departamento',
            's_departamento.unique' => 'el departamento ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_departamento' =>
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
        $this->_reglasx['s_departamento'][1]='unique:sis_departams,s_departamento,'.$this->segments()[2];
        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
