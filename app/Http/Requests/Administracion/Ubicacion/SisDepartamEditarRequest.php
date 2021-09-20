<?php

namespace app\Http\Requests\Administracion\Ubicacion;


use Illuminate\Foundation\Http\FormRequest;

class SisDepartamEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_departamento.required' => 'El nombre del departamento es requerido',
            's_departamento.unique' => 'El nombre del departamento ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_departamento' =>
            [
                'required',
                'string',
                'max:120',
            ]

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
        $this->_reglasx['s_departamento'][3]='unique:sis_departams,s_departamento,'.$this->segments()[2];
    }
}
