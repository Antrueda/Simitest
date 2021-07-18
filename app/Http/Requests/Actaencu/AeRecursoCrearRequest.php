<?php

namespace app\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeRecursoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'ag_recurso_id'                              => 'Debe diligenciar la fecha de diligenciamiento.',
        ];
        $this->_reglasx = [
            'ag_recurso_id'                              => ['required', 'exists:ag_recursos,id'],
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
