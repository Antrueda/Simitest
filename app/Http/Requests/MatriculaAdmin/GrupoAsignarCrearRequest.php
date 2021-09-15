<?php

namespace App\Http\Requests\MatriculaAdmin;

use Illuminate\Foundation\Http\FormRequest;

class GrupoAsignarCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
       
        $this->_mensaje = [
            'grupo_matricula_id.required' => 'Seleccione un grupo',
            'sis_servicio_id.required' => 'Seleccione un servicio',
            'sis_depen_id.required' => 'Seleccione una UPI',
            
        ];
        $this->_reglasx = [
        'grupo_matricula_id' => ['required'],
        'sis_servicio_id' => ['required'],
        'sis_depen_id' => ['required'],
            
        ];
    }
    //fos_stses_id
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
