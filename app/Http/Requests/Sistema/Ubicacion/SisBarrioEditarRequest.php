<?php

namespace App\Http\Requests\Sistema\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;
class SisBarrioEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_barrio.required' => 'Ingrese el nombre de la barrio',
            's_barrio.unique' => 'la barrio ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_barrio' =>
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
        $this->_reglasx['s_barrio'][1]='unique:sis_barrios,s_barrio,'.$this->segments()[2];
        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
