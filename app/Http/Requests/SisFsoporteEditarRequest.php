<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SisFsoporteEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombre.required' => 'Igrese un nombre',
            'sis_actividad_id.required' => 'Seleccione un ciclo vital',

        ];
        $this->_reglasx = [
            'nombre' => ['required'],
            'sis_actividad_id' => ['required'],
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
