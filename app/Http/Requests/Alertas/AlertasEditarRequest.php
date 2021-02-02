<?php

namespace App\Http\Requests\Alertas;

use Illuminate\Foundation\Http\FormRequest;

class AlertasEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'titulo.required' => 'Ingrese un título',
            'descripcion.required' => 'Ingrese una descripcion',
            'sis_esta_id.required' => 'Seleccione un estado',
            'estusuario_id.required' => 'Seleccione una justificación de estado',
            
        ];
        $this->_reglasx = [
            'titulo' => ['required'],
            'descripcion' => ['required'],
            'sis_esta_id' => ['required'],
            'estusuario_id' => ['required'],
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

