<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;
class SisPaisEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_pais.required' => 'Ingrese el nombre del país',
            's_pais.unique' => 'el país ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_pais' =>
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
        $this->_reglasx['s_pais'][1]='unique:sis_pais,s_pais,'.$this->segments()[2];
        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
