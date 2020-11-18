<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;

class SisBarrioCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_barrio.required' => 'Ingrese el nombre del barrio',
            's_barrio.unique' => 'El barrio ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_barrio' =>
            [
                'required',
                'unique:sis_barrios,s_barrio',
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
