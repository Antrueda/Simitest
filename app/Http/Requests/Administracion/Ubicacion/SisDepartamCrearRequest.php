<?php

namespace App\Http\Requests\Administracion\Ubicacion;


use Illuminate\Foundation\Http\FormRequest;

class SisDepartamCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_departamento.required'=>'El nombre del departamento es requerido',
          ];
        $this->_reglasx = [
            's_departamento' => 'required|string|max:120|unique:sis_departams',
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
        return $this->_reglasx;    }

        public function validar()
        {

        }
}
