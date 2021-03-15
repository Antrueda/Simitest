<?php

namespace App\Http\Requests\Administracion\Ubicacion;


use Illuminate\Foundation\Http\FormRequest;

class SisMunicipioEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_municipio.required' => 'El nombre del municipio es requerido',
            's_municipio.unique' => 'El nombre del municipio ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_municipio' =>
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
        $this->_reglasx['s_municipio'][3] = 'unique:sis_municipios,s_municipio,' . $this->segments()[2];
    }
}
