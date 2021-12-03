<?php

namespace app\Http\Requests\AdmiActi;


use Illuminate\Foundation\Http\FormRequest;

class AdmiActiEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre de la actividad.',
            'descripcion.required'          => 'Debe diligenciar la descripción de la actividad.',
            'tipos_actividad_id.required'   => 'Debe seleccionar el tipo de la actividad.',
            'sis_depen_id.required'         => 'Debe seleccionar la(s) UPI(s)/Dependencia(s).',
            'estusuarios_id.required'       => 'Debe seleccionar el estado de la actividad.',
            'sis_esta_id.required'          => 'Debe seleccionar la justificacion del estado de la actividad.',
        ];
        $this->_reglasx = [
            'nombre'               => ['required', 'string'],
            'descripcion'          => ['required', 'string'],
            'tipos_actividad_id'   => ['required', 'integer', 'exists:tipos_actividads,id'],
            'sis_depen_id'         => ['required'],
            'estusuarios_id'       => ['required', 'integer', 'exists:estusuarios,id'],
            'sis_esta_id'          => ['required', 'integer', 'exists:sis_estas,id'],
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
        // $this->_reglasx['nombre'][3]='unique:temas,nombre,'.$this->segments()[3];
    }
}
