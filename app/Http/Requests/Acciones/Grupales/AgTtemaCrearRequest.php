<?php

namespace app\Http\Requests\Acciones\Grupales;

use Illuminate\Foundation\Http\FormRequest;

class AgTtemaCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'ag_taller_id.required' => 'Seleccione un taller',
        ];
        $this->_reglasx = [
            'ag_taller_id' =>['required'],
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
        /*$dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        if (!isset($dataxxxx['permissions'])) {
            $this->_mensaje['permissions.required'] = 'Seleccione al menos un permios';
            $this->_reglasx['permissions'] = 'required';
        }*/
    }
}
