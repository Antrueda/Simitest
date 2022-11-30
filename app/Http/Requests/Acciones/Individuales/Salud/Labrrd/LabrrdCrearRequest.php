<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\Labrrd;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class LabrrdCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'fechdili.required'               => 'Por seleccione Fecha de diligenciamiento.',
            'sis_origen_id.required'         => 'Por seleccione UPI, AREA O CONTEXTO. ORIGEN ',
            'sis_atenc_id.required'         => 'Por seleccione UPI, AREA O CONTEXTO. ATENCIÓN',
            'lugar_externo.required_if'          => 'Escriba el lugar externo.',
            'prm_faseacomp.required'          => 'Debe diligenciar FASE DE ACOMPAÑAMIENTO.',
            'gustos_intereses.required'   => 'Debe seleccionar GUSTOS E INTERESES.',
            'observacion.required'          => 'Debe diligenciar observacion.',
            'observacion.string'    => 'observacion tiene que ser texto.',
            'observacion.max'    => 'observacion no puede superar los 4000 caracteres.',
            'habilidades.required'          => 'Debe seleccionar HABILIDADES A TRABAJAR.',
            'user_fun_id.required'   => 'Debe seleccionar el Funcionario/Contratista que realiza el seguimiento.',
            'resultados.required'   => 'Complete ANÁLISIS DEL COMPONENTE .',
        ];

        $this->_reglasx = [
            'fechdili' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'sis_origen_id' => ['required'],
            'sis_atenc_id' => ['required'],
            'lugar_externo' => 'required_if:sis_atenc_id,1',
            'prm_faseacomp' => 'required',
            'gustos_intereses' => 'required',
            'observacion' => 'required|string|max:4000',
            'habilidades' => 'required',
            'user_fun_id' => 'required',
            'resultados' => 'required',
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
