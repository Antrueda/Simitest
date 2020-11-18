<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;
class SisUpzEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_upz.required' => 'Ingrese el nombre de la upz',
            's_upz.unique' => 'la upz ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_upz' =>
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
        $this->_reglasx['s_upz'][1]='unique:sis_upzs,s_upz,'.$this->segments()[2];
        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
