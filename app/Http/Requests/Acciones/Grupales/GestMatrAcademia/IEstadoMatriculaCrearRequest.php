<?php

namespace App\Http\Requests\Acciones\Grupales\GestMatrAcademia;


use Illuminate\Foundation\Http\FormRequest;

class IEstadoMatriculaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        // Todo: Colocar los mensajes
        $this->_mensaje = [
            'fechdili.required'=>'Seleccione el tipo de servicio',
            'prm_estado_matri.required'=>'Seleccione el nombre del programa o actividad',
        ];

        // Todo: Colocar las validaciones
        $this->_reglasx = [
            'fechdili' => 'required',
            'prm_estado_matri'=> 'required',
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
    }
}
