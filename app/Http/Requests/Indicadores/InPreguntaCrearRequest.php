<?php

namespace app\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InPreguntaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_pregunta.required' => 'Seleccione una pregunta',
        ];
        $this->_reglasx = [
            's_pregunta' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
                 'unique:in_preguntas,s_pregunta,'
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        
    }
}
