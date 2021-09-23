<?php

namespace App\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InPreguntaEditarRequest extends FormRequest
{
   private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

       $this->_mensaje = [
            's_pregunta.required' => 'Ingrese una pregunta',
            's_pregunta.unique' => 'La pregunta ya existe',
            
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
        
        $this->_reglasx['s_pregunta'] =
            [
                'required', 
                'unique:in_preguntas,s_pregunta,' . $this->segments()[2]
            ];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        
    }
}
