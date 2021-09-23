<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SisEpsEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'i_prm_tentidad_id.required' => 'Seleccione un ciclo vital',
            's_nombre_entidad.required' => 'Igrese un nombre',

        ];
        $this->_reglasx = [
            'i_prm_tentidad_id' => ['required'],
            's_nombre_entidad' => ['required'],
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
