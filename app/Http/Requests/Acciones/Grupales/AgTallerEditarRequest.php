<?php

namespace app\Http\Requests\Acciones\Grupales;

use Illuminate\Foundation\Http\FormRequest;

class AgTallerEditarRequest extends FormRequest
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
        $this->_reglasx = [
            's_taller' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
                'unique:ag_tallers,s_taller,'.$this->segments()[3]
            ],
            's_descripcion' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma 
            ],
            'estusuario_id' =>['required'],
            'sis_esta_id' =>['required'],
        ];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
