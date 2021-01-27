<?php

namespace App\Http\Requests\FichaObservacion;

use Illuminate\Foundation\Http\FormRequest;

class FosStseEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required' => 'El nombre es requerido',
            'nombre.unique' => 'El nombre ya existe',
            'nombre.max' => 'El nombre un máximo de 120 caracteres',
            'estusuario_id.required'=> 'Seleccione la justificación de estado',
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
            'nombre' => ['Required', 'string', 'max:120', 'unique:fos_tses,nombre,'. $this->segments()[2]],
            'estusuario_id' => ['Required'],
          ];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
