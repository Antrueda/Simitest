<?php

namespace App\Http\Requests\Acciones\Grupales;

use Illuminate\Foundation\Http\FormRequest;

class AgContextoEditarRequest extends FormRequest
{
   private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_contexto.required' => 'Ingrese el nombre del contexto',
            's_descripcion.required' => 'Ingrese la descripción del contexto',
        ];
        $this->_reglasx = [
            's_contexto' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
                'unique:ag_contextos,s_contexto,'
            ],
            's_descripcion' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma

            ],
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
