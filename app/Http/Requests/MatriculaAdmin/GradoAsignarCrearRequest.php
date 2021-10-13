<?php

namespace App\Http\Requests\MatriculaAdmin;

use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use Illuminate\Foundation\Http\FormRequest;

class GradoAsignarCrearRequest extends FormRequest
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

        $registro = GradoAsignar::select('grado_asignars.grado_matricula')
        ->join('sis_servicios', 'grado_asignars.sis_servicio_id', '=', 'sis_servicios.id')
        ->join('sis_depens', 'grado_asignars.sis_depen_id', '=', 'sis_depens.id')
        ->where('sis_depens.id', $this->sis_depen_id) 
        ->where('sis_servicios.id', $this->sis_servicio_id) 
        ->where('grado_asignars.grado_matricula', $this->grado_matricula)
        ->first();
        
        if (isset($registro)) {
            $this->_mensaje['existexx.required'] = 'el grado ya se encuentra asignado';
            $this->_reglasx['existexx'] = ['Required',];
        }
    }
}
