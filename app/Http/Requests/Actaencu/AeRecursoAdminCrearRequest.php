<?php

namespace App\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeRecursoAdminCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_trecurso_id.required'   => 'Seleccione el tipo de recurso.',
            's_recurso.required'         => 'Ingrese el nombre del recurso.',
            'prm_umedida_id.required'    => 'Seleccione la unidad de medida.',
            'estusuario_id.required'     => 'Seleccione la justificación del registro.',
        ];

        $this->_reglasx = [
            'prm_trecurso_id'   => ['required', 'exists:parametros,id'],
            's_recurso'         => ['required', 'string'],
            'prm_umedida_id'    => ['required', 'exists:parametros,id'],
            'estusuario_id'     => ['required', 'exists:estusuarios,id'],
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
