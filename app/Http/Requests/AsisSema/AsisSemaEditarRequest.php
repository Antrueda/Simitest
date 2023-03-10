<?php

namespace App\Http\Requests\AsisSema;


use Illuminate\Foundation\Http\FormRequest;
use App\Models\Acciones\Grupales\Asistencias\Semanal\AsissemaMatricula;

class AsisSemaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
         // Todo: Colocar los mensajes
         $this->_mensaje = [
            'h_inicio.required'=>'Seleccione hora de inicio',
            'h_final.required'=>'Seleccione hora final',
        ];

        // Todo: Colocar las validaciones
        $this->_reglasx = [
            'h_inicio'=>'required',
            'h_final'=>'required',
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
           //activar validaciones segun programa
        //asistencia academica
    
        if ($this->puedeeditar == "1") {
            $valor = AsissemaMatricula::where('asissema_id',request()->route('modeloxx')->id)->count();
            if ($valor != 0) {
                $this->_reglasx['puedeseditar'] = 'required';
                $this->_mensaje['puedeseditar.required'] =  'No puede editar ya tiene relacionados NNAJS';
            }
            $this->_reglasx['prm_actividad_id'] = 'required';
            $this->_mensaje['prm_actividad_id.required'] =  'Seleccione el nombre del programa o actividad';
            if($this->prm_actividad_id == 2721){
                $this->_reglasx['eda_grados_id'] = 'required';
                $this->_mensaje['eda_grados_id.required'] =  'Seleccione el grado';
    
                $this->_reglasx['prm_grupo_id'] = 'required';
                $this->_mensaje['prm_grupo_id.required'] =  'Seleccione el grupo';
            }
            //asistencia convenio 
            if($this->prm_actividad_id == 2724){
                $this->_reglasx['tipoacti_id'] = 'required';
                $this->_mensaje['tipoacti_id.required'] =  'Seleccione el tipo de actividad';
    
                $this->_reglasx['actividade_id'] = 'required';
                $this->_mensaje['actividade_id.required'] =  'Seleccione la actividad';
    
                $this->_reglasx['prm_grupo_id'] = 'required';
                $this->_mensaje['prm_grupo_id.required'] =  'Seleccione el grupo';
            }
            //formacion tecnica-convenios
            if($this->prm_actividad_id == 2723){
                $this->_reglasx['prm_convenio_id'] = 'required';
                $this->_mensaje['prm_convenio_id.required'] =  'Seleccione el convenio-programa';
    
                $this->_reglasx['prm_grupo_id'] = 'required';
                $this->_mensaje['prm_grupo_id.required'] =  'Seleccione el grupo';
            }
            //formscion tecnica talleres
            if($this->prm_actividad_id == 2722){
                $this->_reglasx['prm_tipo_curso'] = 'required';
                $this->_mensaje['prm_tipo_curso.required'] =  'Seleccione el tipo de curso';
    
                $this->_reglasx['prm_curso'] = 'required';
                $this->_mensaje['prm_curso.required'] =  'Seleccione el curso';
    
                $this->_reglasx['prm_grupo_id'] = 'required';
                $this->_mensaje['prm_grupo_id.required'] =  'Seleccione el grupo';
            }
        }
        
    }
}
