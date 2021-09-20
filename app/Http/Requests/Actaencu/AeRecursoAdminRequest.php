<?php

namespace app\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeRecursoAdminRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'estusuario_id.required'     => 'Seleccione la justificación del registro.',
        ];

        $this->_reglasx = [
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
        return $this->_reglasx;
    }
}
