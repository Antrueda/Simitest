<?php

namespace App\Http\Requests\Actaencu;

use App\Rules\RecursoActaEncuentroRule;
use Illuminate\Foundation\Http\FormRequest;

class AeRecursoAdminEditarRequest extends FormRequest
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

        $this->_reglasx = [
            'prm_trecurso_id'   => ['required', 'exists:parametros,id'],
            's_recurso'         => ['required', 'string',new RecursoActaEncuentroRule(['dataxxxx'=>$this,'creaupda'=>false])],
            'prm_umedida_id'    => ['required', 'exists:parametros,id'],
            'estusuario_id'     => ['required', 'exists:estusuarios,id'],
        ];
        return $this->_reglasx;
    }
}
