<?php

namespace App\Http\Requests\MotivoEgreso;

use Illuminate\Foundation\Http\FormRequest;

class MotivoEgresosecuEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required' => 'El nombre es requerido',
            'descripcion.max' => 'La descripción debe tener un máximo de 4000 caracteres',
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
            'nombre' => ['Required', 'string', 'max:120'. $this->segments()[2]],
            'estusuario_id' => ['Required'],
            'descripcion' => ['nullable','max:4000'],
          ];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
