<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class LabrrdAsocomponeteEditRequest  extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'tipo_valoracion.required'               => 'Seleccione el tipo de VALORACIÓN.',
            'tipo_componente.required'               => 'Seleccione el tipo de componente.',
            'componente_id.required'               => 'Seleccione el componente.',
            'componente_id.numeric'               => 'El componente debe ser numerico.',
            'componente_id.unique'               => 'El componente ya fue asociado con el tipo de VALORACIÓN.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del VALORACIÓN.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del VALORACIÓN.',
        ];
        $this->_reglasx = [
            'tipo_valoracion'          => ['required'],
            'tipo_componente'               => ['required'],
            'componente_id'               => ['required', 'numeric'],
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
        $tipo_valoracion = $this->tipo_valoracion;
        $componente = $this->componente_id;

        $this->_reglasx['componente_id'][1] =   Rule::unique('labrrd_aso_componentes')->where(function ($query) use ($tipo_valoracion, $componente) {
            return $query->where('tipo_valoracion', $tipo_valoracion)->where('componente_id', $componente);
        })->ignore($this->segments()[3]);
    }
}
