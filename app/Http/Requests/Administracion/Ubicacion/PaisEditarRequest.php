<?php

namespace App\Http\Requests\Administracion\Ubicacion;


use Illuminate\Foundation\Http\FormRequest;

class PaisEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_pais.required' => 'El nombre del pasi es requerido',
            's_pais.unique' => 'El nombre del pasi ya se encuentra en uso',
            's_iso.required'=>'El ISO es requerido'
        ];
        $this->_reglasx = [
            's_pais' =>
            [
                'required',
                'string',
                'max:120',

            ],
            's_iso'=>['required']

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
     * Get the validation rules that Apply to the request.
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
        $this->_reglasx['s_pais'][3]='unique:sis_pais,s_pais,'.$this->segments()[2];
    }
}
