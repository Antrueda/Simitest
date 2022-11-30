<?php

namespace App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class SeguimientoDastCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'fecha.required'               => 'Por seleccione Fecha de diligenciamiento.',
            'sis_depen_id.required'         => 'Por seleccione UPI, AREA O CONTEXTO.',
            'prm_tipo_seguimiento.required'   => 'Debe seleccione el tipo de seguimiento.',
            'obs_seguimiento.required'          => 'Debe diligenciar Observacion.',
            'obs_seguimiento.string'    => 'Observacion tiene que ser texto.',
            'obs_seguimiento.max'    => 'Observacion no puede superar los 4000 caracteres.',
            'prm_diligencia.required'   => 'Debe seleccione el Diligenciamiento del Cuestionario.',
            'user_fun_id.required'   => 'Debe seleccione el Funcionario/Contratista que realiza el seguimiento.',

        ];

        $this->_reglasx = [
            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'sis_depen_id' => ['required'],
            'prm_tipo_seguimiento' => 'required',
            'obs_seguimiento' => 'required|string|max:4000',
            'prm_diligencia' => 'required',
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
