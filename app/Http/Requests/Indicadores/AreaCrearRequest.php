<?php

namespace app\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class AreaCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombre.required' => 'Ingrese el nombre del área',
            'nombre.unique' => 'El área ya se encuentra en uso',
            'sis_esta_id.required' => 'Seleccione un estado',
            'estusuario_id.required' => 'Seleccione una justificación',
        ];
        $this->_reglasx = [
            'nombre' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
                'unique:areas,nombre,'
            ],
            'sis_esta_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'estusuario_id' =>
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
        // unico para relacion multiple
    }
}
