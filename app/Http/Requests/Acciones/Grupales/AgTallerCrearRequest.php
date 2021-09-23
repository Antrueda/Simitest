<?php

namespace App\Http\Requests\Acciones\Grupales;

use Illuminate\Foundation\Http\FormRequest;

class AgTallerCrearRequest extends FormRequest
{
    
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_taller.required' => 'Ingrese el nombre del Taller',
            's_descripcion.required' => 'Ingrese la descripción del taller',
            'estusuario_id.required' => 'Ingrese una justificación de estado',      
            'sis_esta_id.required' => 'Seleccione un estado',      
        ];
        $this->_reglasx = [
            's_taller' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
                'unique:ag_tallers,s_taller,'
            ],
            's_descripcion' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
                
            ],
            'estusuario_id' =>['required'],
            'sis_esta_id' =>['required'],
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        
    }
}
