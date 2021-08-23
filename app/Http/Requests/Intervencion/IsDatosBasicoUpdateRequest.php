<?php

namespace App\Http\Requests\Intervencion;

use Carbon\Carbon;
use App\Rules\TiempoCargueRule;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class IsDatosBasicoUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;
    public function __construct()
    {
        $this->_mensaje = [
            'sis_depen_id.required' => 'Seleccione UPI/ÁREA/CONTEXTO',
            'd_fecha_diligencia.required' => 'Seleccione Fecha de diligenciamiento',
            'i_primer_responsable.required' => 'Escriba el primer del responsable',
            'i_prm_tipo_atencion_id.required' => 'Seleccione Tipo de atención',
            'i_prm_area_ajuste_id.required' => 'Seleccione Área de ajuste',
            'i_prm_subarea_ajuste_id.required' => 'Seleccione Subárea de ajuste',
            's_tema.required' => 'Seleccione Tema',
            's_objetivo_sesion.required' => 'Describa el Objetivo de la sesión',
            's_desarrollo_sesion.required' => 'Describa el Desarrollo de la sesión',
            's_conclusiones_sesion.required' => 'Describa las Conclusiones de la sesión',
            'i_prm_area_proxima_id.required' => 'Seleccione un Área de ajuste a trabajar',
            'i_segundo_responsable.required' => 'Seleccione al Segundo Funcionario Responsable',
        ];
        $this->_reglasx = [
            'sis_depen_id' => ['Required'],
            'd_fecha_diligencia' => ['required','date','before_or_equal:'.Carbon::today()->isoFormat('YYYY-MM-DD')],
            'i_primer_responsable' => ['Required'],
            'i_prm_tipo_atencion_id' => ['Required'],
            'i_prm_area_ajuste_id' => ['Required'],
            'i_prm_subarea_ajuste_id' => ['Required'],
            's_tema' => ['Required'],
            's_objetivo_sesion' => ['Required'],
            's_desarrollo_sesion' => ['Required'],
            's_conclusiones_sesion' => ['Required'],
            'i_prm_area_proxima_id' => [
                Rule::requiredIf(function () {
                return request()->d_fecha_proxima != null;
                })
                ],
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
        if ($this->d_fecha_diligencia != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->d_fecha_diligencia
            ]);
            $this->_reglasx['d_fecha_diligencia'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }
        $this->validar();

        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        if ($dataxxxx['i_prm_tipo_atencion_id'] == '1064' || $dataxxxx['i_prm_tipo_atencion_id'] == '1065' || $dataxxxx['i_prm_tipo_atencion_id'] == '1067'){
            $this->_mensaje['i_segundo_responsable.required'] ='Seleccione el segundo responsable';
            $this->_reglasx['i_segundo_responsable']='required';
        }
        if ($dataxxxx['i_prm_tipo_atencion_id'] == '1067'){
            $this->request->add(['i_prm_area_ajuste_id'=>235]);
            $this->request->add(['i_prm_subarea_ajuste_id'=>235]);
        }

        if ($dataxxxx['i_prm_subarea_emocional_id'] > '0'){
            $this->_mensaje['i_prm_avance_emocional_id.required'] ='Seleccione el avance en subárea emocional';
            $this->_reglasx['i_prm_avance_emocional_id']='required';
        }
        if ($dataxxxx['i_prm_subarea_familiar_id'] > '0'){
            $this->_mensaje['i_prm_avance_familiar_id.required'] ='Seleccione el avance en subárea familiar';
            $this->_reglasx['i_prm_avance_familiar_id']='required';
        }
        if ($dataxxxx['i_prm_subarea_sexual_id'] > '0'){
            $this->_mensaje['i_prm_avance_sexual_id.required'] ='Seleccione el avance en subárea sexual';
            $this->_reglasx['i_prm_avance_sexual_id']='required';
        }
        if ($dataxxxx['i_prm_subarea_compor_id'] > '0'){
            $this->_mensaje['i_prm_avance_compor_id.required'] ='Seleccione el avance en subárea comportamental';
            $this->_reglasx['i_prm_avance_compor_id']='required';
        }
        if ($dataxxxx['i_prm_subarea_social_id'] > '0'){
            $this->_mensaje['i_prm_avance_social_id.required'] ='Seleccione el avance en subárea social';
            $this->_reglasx['i_prm_avance_social_id']='required';
        }
        if ($dataxxxx['i_prm_subarea_academ_id'] > '0'){
            $this->_mensaje['i_prm_avance_academ_id.required'] ='Seleccione el avance en subárea académica';
            $this->_reglasx['i_prm_avance_academ_id']='required';
        }

        if($this->i_primer_responsable==$this->i_segundo_responsable){
            $this->_mensaje['existexx.required'] = 'No se puede registrar el mismo funcionario';
            $this->_reglasx['existexx'] = ['Required',];
        }


    }
}
