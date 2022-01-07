<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required' => 'Ingrese el nombre del área',
            'nombre.unique' => 'El área ya se encuentra en uso',
            'sis_esta_id.required' => 'Seleccione un estado',
            'estusuario_id.required' => 'Seleccione una justificación',
        ];
        $this->_reglasx = [
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
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();
        $this->_reglasx['nombre'] = [
            'required',
            'unique:areas,nombre,' . $this->segments()[2]
        ];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        // unico para relacion multiple
    }
}
