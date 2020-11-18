<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;
class SisMunicipioEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_municipio.required' => 'Ingrese el nombre del municipio',
            's_municipio.unique' => 'el municipio ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_municipio' =>
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
        $this->_reglasx['s_municipio'][1]='unique:sis_municipios,s_municipio,'.$this->segments()[2];
        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
