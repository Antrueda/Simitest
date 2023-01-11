<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\Vnutricional;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class VnutricionalCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'fecha.required'               => 'Por seleccione Fecha de diligenciamiento.',
            'sis_depen_id.required'         => 'Por seleccione UPI, AREA O CONTEXTO.',
            'prm_requiere_vespa.required'   => 'Debe seleccione si Requiere aplicación del VESPA.',
            'fecha_vespa.required_if'          => 'Debe seleccionar Fecha de aplicación del VESPA.',
            'accion_desarrolla.required'          => 'Debe diligenciar Tipo de acción a desarrollar.',
            'accion_desarrolla.string'    => 'Tipo de acción a desarrollar tiene que ser texto.',
            'accion_desarrolla.max'    => 'Tipo de acción a desarrollar no puede superar los 4000 caracteres.',
            'prm_patron_con.required'   => 'Debe seleccione el Patrón de consumo.',
            'obs_patron_con.required'          => 'Debe diligenciar Patrón de consumo.',
            'obs_patron_con.string'    => 'Patrón de consumo tiene que ser texto.',
            'obs_patron_con.max'    => 'Patrón de consumo no puede superar los 4000 caracteres.',
            'accion_curso.required'          => 'Debe diligenciar Acción a realizar por curso de vida.',
            'accion_curso.string'    => 'Acción a realizar por curso de vida tiene que ser texto.',
            'accion_curso.max'    => 'Acción a realizar por curso de vida no puede superar los 4000 caracteres.',
            'observacion.required'          => 'Debe diligenciar Observacion.',
            'observacion.string'    => 'Observacion tiene que ser texto.',
            'observacion.max'    => 'Observacion no puede superar los 4000 caracteres.',
            'prm_diligencia.required'   => 'Debe seleccione el Diligenciamiento del Cuestionario.',
            'user_fun_id.required'   => 'Debe seleccione el Funcionario/Contratista que realiza el seguimiento.',
            'resultado.required'   => 'Por favor primero vea los resultados',
            'resultado_id.required'   => 'y proceda a guardar.',
        ];

        $this->_reglasx = [
            'fechdili' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'sis_depen_id' => ['required'],
            'prm_estado_gesta' => 'nullable,required',
            'edad_gesta'   => 'required_if:prm_estado_gesta,227',
            'peso' => 'required|string|max:4000',
            'talla' => 'required',
            'cintura_cc' => 'required|string|max:4000',
            'prm_cod_imcedad' => 'required|string|max:4000',
            'prm_cod_te' => 'required',
            'prm_acti_fisica' => 'required',
            'prm_apetito' => 'required',
            'n_comidas' => 'required',
            'resp_alimentos' => 'required',
            'prm_accion_aume' => 'required',
            'prm_accion_dism' => 'required',
            'prm_seg_consumo' => 'required',
            'intrainstitucional' => 'required',
            'prm_diagnostico' => 'required',
            'observacion' => 'required|string|max:4000',
            'prm_requi_certi' => 'required',
            'prm_certi_recomen' => 'required_if:prm_requi_certi,227',
            'plan_alimentacion' => 'required_if:prm_certi_recomen,3011',
            'suplemen_nutri' => 'required_if:prm_certi_recomen,3012',
            'user_fun_id' => 'required',
        ];
    }

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
        if ($this->fechdili != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fechdili
            ]);

            $this->_reglasx['fechdili'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }

        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {
    }
}
