<?php

namespace App\Http\Requests\FichaObservacion;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRuleTrait;
use Illuminate\Foundation\Http\FormRequest;

class FosDatosBasicoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'sis_depen_id.required' => 'Seleccione la UPI/Dependencia',
            'd_fecha_diligencia.required' => 'Seleccione la fecha de diligenciamiento',
            'fos_stse_id.required' => 'Seleccione el sub tipo de seguimiento',
            's_observacion.required' => 'Escriba la observación',
            'sis_entidad_id.required' => 'Seleccione una entidad',

            //'fi_compfami_id.required' => 'Escriba el acudiente',
        ];
        $this->_reglasx = [
            'd_fecha_diligencia' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'sis_depen_id' => ['Required'],
            'fos_stse_id' => ['Required'],
            's_observacion' => ['Required'],
            'sis_entidad_id'=> ['Required'],

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
                $this->_reglasx['d_fecha_diligencia'][] = new TiempoCargueRuleTrait(['estoyenx'=>1]);
        }
        return $this->_reglasx;
    }
}
