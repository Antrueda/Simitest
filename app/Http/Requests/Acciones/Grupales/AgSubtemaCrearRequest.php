<?php

namespace App\Http\Requests\Acciones\Grupales;

use Illuminate\Foundation\Http\FormRequest;

class AgSubtemaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_descripcion.required' => 'Ingrese una descripción',
            'ag_taller_id.required' => 'seleccione un taller',
            's_subtema.required' => 'Ingrese el nombre del subtema',
            's_subtema.unique' => 'Ese subtema ya se encuentra en uso',
        ];
        $this->_reglasx = [
            's_subtema' =>['required','unique:ag_subtemas'],
            'ag_taller_id' =>['required'],
            's_descripcion' =>['required'],
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
