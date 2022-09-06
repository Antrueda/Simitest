<?php

namespace App\Http\Requests\Acciones\Grupales\Asistencias\Diaria;


use Illuminate\Foundation\Http\FormRequest;

class AsdDiariaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        // Todo: Colocar los mensajes
        $this->_mensaje = [
            // 'nombre_campo.regla' => 'mensaje',
            'fechdili.required'=>'Seleccione una fecha de diligenciamiento',
            'sis_depen_id.required'=>'Seleccione una dependencia',
            'sis_servicio_id.required'=>'Seleccione un servicio',
            'prm_lugactiv_id.required'=>'Seleccine el lugar de la actividad',
            'sis_localidad_id.required'=>'Seleccione una localidad',
            'sis_localupz_id.required'=>'Seleccione una upz',
            'sis_upzbarri_id.required'=>'Seleccione un barrio',
            'sis_departam_id.required'=>'Seleccione un departamento',
            'sis_municipio_id.required'=>'Seleccione un municipio',
            'prm_actividad_id.required'=>'Seleccione el nombre del programa o actividad',
            'prm_grupo_id.required'=>'Seleccione un grupo',
            'numepagi.required'=>'Ingrese el número de página',
        ];

        // Todo: Colocar las validaciones
        $this->_reglasx = [
            'fechdili' => ['required'],
            'sis_depen_id' => ['required'],
            'sis_servicio_id' => ['required'], 
            'prm_lugactiv_id' => ['required'],
            'sis_localidad_id' => ['required'],
            'sis_localupz_id' => ['required'],
            'sis_upzbarri_id' => ['required'],
            'sis_departam_id' => ['required'],
            'sis_municipio_id' => ['required'],
            'prm_actividad_id' => ['required'],
            'prm_grupo_id' => ['required'],
            // 'numepagi'=>['required'],
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
        if ($this->prm_actividad_id == 2765) {
            $this->_reglasx['numepagi'] = ['required'];
        }
        return $this->_reglasx;
    }
}
