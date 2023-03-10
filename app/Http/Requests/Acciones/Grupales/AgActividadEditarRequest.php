<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use App\Rules\TiempoCargueRuleTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Foundation\Http\FormRequest;

class AgActividadEditarRequest extends FormRequest
{
    use  ManageTimeTrait;
    private $_mensaje;
    private $_reglasx;

 
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
        $this->_mensaje = [
            'd_registro.required' => 'Seleccione un día de registro',
            'area_id.required' => 'Seleccione un área',
            'sis_deporigen_id.required' => 'Seleccione una dependencia de origen',
            'ag_tema_id.required' => 'Seleccione un tema',
            'i_prm_lugar_id.required' => 'Seleccione un lugar',
            'sis_depdestino_id.required' => 'Seleccione una dependencia de destino',
            'ag_taller_id.required' => 'Seleccione un taller',
            'ag_sttema_id.required' => 'Seleccione un subtema',
            'i_prm_dirig_id.required' => 'Seleccione a quién va dirigido',
            's_entidad.required' => 'Seleccione una entidad',
            's_introduc.required' => 'Ingrese la introducción',
            's_justific.required' => 'Ingrese la justificación',
            's_objetivo.required' => 'Ingrese los objetivos',
            's_metodolo.required' => 'Ingrese la metodología',
            's_contenid.required' => 'Ingrese el contenido',
            's_resultad.required' => 'Ingrese el resultado',
            's_evaluaci.required' => 'Ingrese una evaluación',
            's_observac.required' => 'Ingrese una observación',
            's_doc_adjunto_ar.required' => 'Debe adjuntar el soporte',
            's_doc_adjunto_ar.mimes' => 'El archivo debe ser imagen o pdf',
        ];
        return $this->_mensaje;
    }

    /**
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->_reglasx = [
            'd_registro' => [
                'required',
                'date_format:Y-m-d',
                new FechaMenor(),
                new TiempoCargueRuleTrait(['estoyenx' => 1])
            ],
            'area_id' => ['required'],
            'sis_deporigen_id' => ['required'],
            'ag_tema_id' => ['required'],
            'i_prm_lugar_id' => ['required'],
            'sis_depdestino_id' => ['required'],
            'd_registro' => ['required'],
            'ag_taller_id' => ['required'],
            'ag_sttema_id' => ['required'],
            'i_prm_dirig_id' => ['required'],
            's_doc_adjunto_ar' => 'nullable|file|mimes:pdf,jpg,jpeg|max:1024',
            's_introduc' => ['required'],
            's_justific' => ['required'],
            's_objetivo' => ['required'],
            's_metodolo' => ['required'],
            's_contenid' => ['required'],
            's_resultad' => ['required'],
            's_evaluaci' => ['required'],
            's_observac' => ['required'],
        ];

        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {

        

        if($this->sis_depdestino_id==1){
            $this->_reglasx['s_prm_espac']='required';
            $this->_mensaje['s_prm_espac.required'] = 'oooooooo';
        }
        
    }
}
