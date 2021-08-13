<?php

namespace App\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeRecursoEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_trecurso_id.required'   => 'Seleccione el tipo de recurso.',
            'ae_recuadmi_id.required'    => 'Seleccione el recurso.',
            'cantidad.required'          => 'Seleccione la unidad de medida.',
            'cantidad.integer'           => 'La cantidad debe ser numérica.',
        ];

        $this->_reglasx = [
            'prm_trecurso_id'            => ['required', 'exists:parametros,id'],
            'ae_recuadmi_id'             => ['required', 'exists:ae_recuadmis,id'],
            'cantidad'                   => ['required','integer'],
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
        return $this->_reglasx;
    }
}
