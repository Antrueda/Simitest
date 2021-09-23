<?php

namespace App\Http\Requests\MatriculaAdmin;

use Illuminate\Foundation\Http\FormRequest;

class GradoAsignarEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

      
        $this->_mensaje = [
            'grado_matricula.required' => 'Seleccione un grado',
            'sis_servicio_id.required' => 'Seleccione un servicio',
            'sis_depen_id.required' => 'Seleccione una UPI',
            'sis_esta_id.required' => 'Seleccione un estado',
            
        ];
        $this->_reglasx = [
        'grado_matricula' => ['required'],
        'sis_servicio_id' => ['required'],
        'sis_depen_id' => ['required'],
        'sis_esta_id' => ['required'],
            
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
