<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiGeneracionIngresoCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_actividad_genera_ingreso_id.required' => 'Seleccione actividad realiza generar ingreso',
            'i_prm_trabajo_informal_id.required' => 'Seleccione seleccione trabajo informal',
            'i_prm_otra_actividad_id.required' => 'Seleccione seleccione otra actividad',
            'i_prm_razon_no_genera_ingreso_id.required' => 'Seleccione porque no genera ingresos',
            'i_prm_jornada_genera_ingreso_id.required' => 'Seleccione en que jornada genera ingreso',
            'i_prm_frec_ingreso_id.required' => 'Seleccione frecuencia recibe ingreso',
            'i_total_ingreso_mensual.required' => 'Seleccione total ingreso',
            'i_prm_tipo_relacion_laboral_id.required' => 'Seleccione tipo relacion laboral',
        ];

        $this->_reglasx = [
            'i_prm_actividad_genera_ingreso_id' => ['Required'],
            'i_prm_trabajo_informal_id' => ['Required'],
            'i_prm_otra_actividad_id' => ['Required'],
            'i_prm_razon_no_genera_ingreso_id' => ['Required'],
            'i_prm_jornada_genera_ingreso_id' => ['Required'],
            'i_prm_frec_ingreso_id' => ['Required'],
            'i_total_ingreso_mensual' => ['Required'],
            'i_prm_tipo_relacion_laboral_id' => ['Required'],
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
        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        // dd($dataxxxx);
        switch ($dataxxxx['i_prm_actividad_genera_ingreso_id']) {
            case 626:
                $this->_mensaje['s_trabajo_formal.required'] = 'Seleccione mencione trabajo formal';
                $this->_reglasx['s_trabajo_formal'] = 'required';
                break;
            case 853:
                $this->_reglasx['i_prm_jornada_genera_ingreso_id'] = 'nullable';
                $this->_reglasx['s_hora_inicial'] = 'nullable';
                $this->_reglasx['s_hora_final'] = 'nullable';
                $this->_reglasx['i_prm_frec_ingreso_id'] = 'nullable';
                $this->_reglasx['i_total_ingreso_mensual'] = 'nullable';
                break;
        }

        if ($this->i_dias_buscando_empleo == '' && $this->i_meses_buscando_empleo == '' && $this->i_anos_buscando_empleo == '') {
            if ($this->i_prm_razon_no_genera_ingreso_id == 711) {
                $this->_mensaje['i_prm_dias_buscando_empleo_id.required'] = 'Indique cuanto tiempo lleva buscando empleo';
                $this->_reglasx['i_prm_dias_buscando_empleo_id'] = ['Required'];
                }
             }
    }
}
