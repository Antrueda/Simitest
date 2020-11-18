<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;

class SisUpzCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_upz.required' => 'Ingrese el nombre del upz',
            's_upz.unique' => 'la upz ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_upz' =>
            [
                'required',
                'unique:sis_upzs,s_upz',
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
