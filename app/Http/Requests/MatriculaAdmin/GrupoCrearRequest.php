<?php

namespace App\Http\Requests\MatriculaAdmin;


use Illuminate\Foundation\Http\FormRequest;

class GrupoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_grupo.required' => 'El nombre es requerido',
            's_grupo.max' => 'El nombre un máximo de 120 caracteres',
            'estusuario_id.required'=> 'Seleccione la justificación de estado',
            'horario.required'=> 'Ingreso el horario',
        ];
        $this->_reglasx = [
            's_grupo' => 'required','string','max:120',
            'horario' => 'required',
            'prm_jornada' => 'required',
            'estusuario_id' => 'required',
            'dias' => 'required|array',
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
        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
