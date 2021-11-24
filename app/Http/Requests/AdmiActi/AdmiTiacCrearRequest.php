<?php

namespace app\Http\Requests\AdmiActi;


use Illuminate\Foundation\Http\FormRequest;

class AdmiTiacCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre del tipo de actividad.',
            'descripcion.required'          => 'Debe diligenciar la descripción del tipo de actividad.',
            'estusuarios_id.required'       => 'Debe seleccionar el estado del tipo de actividad.',
            'sis_esta_id.required'          => 'Debe seleccionar la justificacion del estado del tipo de actividad.',
        ];
        $this->_reglasx = [
            'nombre.required'               => ['required', 'string'],
            'descripcion.required'          => ['required', 'string'],
            'estusuarios_id.required'       => ['required', 'integer', 'exists:estusuarios,id'],
            'sis_esta_id.required'          => ['required', 'integer', 'exists:sis_estas,id'],
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
