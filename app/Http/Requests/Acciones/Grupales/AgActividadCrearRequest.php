<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Rules\FechaMenor;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Foundation\Http\FormRequest;

class AgActividadCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;
    public function __construct()
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
           // 's_prm_espac.required' => 'Seleccione el lugar donde se llevó a cabo',
            's_entidad.required' => 'Seleccione una entidad',
            's_introduc.required' => 'Ingrese la introducción',
            's_justific.required' => 'Ingrese la justificación',
            's_objetivo.required' => 'Ingrese los objetivos',
            's_metodolo.required' => 'Ingrese la metodología',

            's_contenid.required' => 'Ingrese el contenido',

            's_resultad.required' => 'Ingrese el resultado',
            's_evaluaci.required' => 'Ingrese una evaluación',
            's_observac.required' => 'Ingrese una observación',
        ];
        $this->_reglasx = [
            'd_registro' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'area_id' =>['required'],
            'sis_deporigen_id' =>['required'],
            'ag_tema_id' =>['required'],
            'i_prm_lugar_id' =>['required'],
            'sis_depdestino_id' =>['required'],
            'd_registro' =>['required'],
            'ag_taller_id' =>['required'],
            'ag_sttema_id' =>['required'],
            'i_prm_dirig_id' =>['required'],

            's_introduc' =>['required'],
            's_justific' =>['required'],
            's_objetivo' =>['required'],
            's_metodolo' =>['required'],

            's_contenid' =>['required'],

            's_resultad' =>['required'],
            's_evaluaci' =>['required'],
            's_observac' =>['required'],
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
        if ($this->d_registro != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->d_registro,
                'upixxxxx' => $this->sis_deporigen_id,
                'formular'=>2,
                ]);
                if (!$puedexxx['tienperm']) {
                    $this->_mensaje['sinpermi.required'] =  $puedexxx['msnxxxxx'];
                    $this->_reglasx['sinpermi'] = 'required';
                }
        }
        $this->validar();

        return $this->_reglasx;
    }

    public function validar()
    {
        if($this->sis_depdestino_id==1){
            $this->_reglasx['s_prm_espac']='required';
            $this->_mensaje['s_prm_espac.required'] = 'Seleccione el lugar donde se llevó a cabo';
        }
    }
}
