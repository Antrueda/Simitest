<?php

namespace app\Http\Requests\MatriculaAdmin;

use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
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
            'sis_esta_id.required' => 'Seleccione un estado',
            
        ];
        $this->_reglasx = [
        'grupo_matricula_id' => ['required'],
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

        $registro = GrupoAsignar::select('grupo_asignars.grupo_matricula_id')
        ->join('sis_servicios', 'grupo_asignars.sis_servicio_id', '=', 'sis_servicios.id')
        ->join('sis_depens', 'grupo_asignars.sis_depen_id', '=', 'sis_depens.id')
        ->where('sis_depens.id', $this->sis_depen_id) 
        ->where('sis_servicios.id', $this->sis_servicio_id) 
        ->where('grupo_asignars.grupo_matricula_id', $this->grupo_matricula_id)
        ->first();
            
        if (isset($registro)) {
            $this->_mensaje['existexx.required'] = 'el grupo ya se encuentra asignado';
            $this->_reglasx['existexx'] = ['Required',];
        }
    }
}
