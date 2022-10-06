<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class VsrrdCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'fecha.required'               => 'Por seleccione Fecha de diligenciamiento.',
            'sis_origen_id.required'         => 'Por seleccione UPI DE ORIGEN DEL NNAJ.',
            'sis_atenc_id.required'   => 'Por seleccione UPI DE ATENCIÓN.',
            'prm_pre_mitigacion.required'   => 'Debe seleccione Atenciones Previas.',
            'prm_faseacomp.required'          => 'Debe diligenciar FASE DE ACOMPAÑAMIENTO.',
            'prm_tipoacomp.required'   => 'Debe seleccionar TIPO DE ACOMPAÑAMIENTO.',
            'prm_actiemocional.required'          => 'Debe diligenciar ACTIVACIÓN EMOCIONAL.',
            'observacion.required'          => 'Debe diligenciar Observaciones.',
            'observacion.string'    => 'Observaciones tiene que ser texto.',
            'observacion.max'    => 'Observaciones no puede superar los 4000 caracteres.',
            'concepto_rrd.required'          => 'Debe diligenciar Concepto equipo RRD.',
            'concepto_rrd.string'    => 'Concepto equipo RRD tiene que ser texto.',
            'concepto_rrd.max'    => 'Concepto equipo RRD no puede superar los 4000 caracteres.',
            'prm_requi_certi.required'          => 'Debe diligenciar si Requiere certificación PSICOSOCIAL.',
            'requi_certi_recomend.required_if'          => 'La certificacion es obligatoria, ingrese la ventana modal y complete.',
        ];
        $this->_reglasx = [
            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'sis_origen_id' => ['required'],
            'sis_atenc_id' => 'required',
            'prm_pre_mitigacion' => 'required',
            'prm_faseacomp' => 'required',
            'prm_tipoacomp' => 'required',
            'prm_actiemocional' => 'required',
            'observacion' => 'required|string|max:4000',
            'concepto_rrd' => 'required|string|max:4000',
            'prm_requi_certi' => 'required',
            'requi_certi_recomend' => 'required_if:prm_requi_certi,227', 'string|max:4000',
            'user_fun_id' => 'required',
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
        if ($this->fecha != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha
            ]);

            $this->_reglasx['fecha'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }

        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {
    }
}
