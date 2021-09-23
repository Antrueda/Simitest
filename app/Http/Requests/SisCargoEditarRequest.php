<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SisCargoEditarRequest extends FormRequest
{
   private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

       $this->_mensaje = [
            's_cargo.required' => 'Ingrese una pregunta',
            's_cargo.unique' => 'La pregunta ya existe',
            'sis_esta_id.required' => 'Seleccione un estado',
            'estusuario_id.required' => 'Seleccione una jutificación',
        ];
        $this->_reglasx=[
            'sis_esta_id'=>['required'],
            'estusuario_id'=>['required'],
        ]  ;
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

        $this->_reglasx['s_cargo'] =
            [
                'required',
                'unique:sis_cargos,s_cargo,' . $this->segments()[2]
            ];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario

    }
}
