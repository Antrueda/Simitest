<?php

namespace App\Http\Requests\Actaencu;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRuleTrait;
use Illuminate\Foundation\Http\FormRequest;

class AeEncuentroEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'fechdili.required'                              => 'Debe diligenciar la fecha de diligenciamiento.',
            'sis_depen_id.required'                          => 'Debe diligenciar la upi.',
            'sis_servicio_id.required'                       => 'Debe diligenciar el servicio.',
            'sis_localidad_id.required'                      => 'Debe diligenciar la localidad.',
            'sis_upz_id.required'                            => 'Debe diligenciar la upz.',
            'sis_barrio_id.required'                         => 'Debe diligenciar el barrio.',
            'prm_accion_id.required'                         => 'Debe diligenciar la acción.',
            'prm_actividad_id.required'                      => 'Debe diligenciar la actividad.',
            'objetivo.required'                              => 'Debe diligenciar el objetivo.',
            'objetivo.digits_between'                        => 'El objetivo debe tener una longitud de 1 a 500 caracteres.',
            'desarrollo_actividad.required'                  => 'Debe diligenciar el desarrollo de la actividad.',
            'metodologia.required'                           => 'Debe diligenciar la metodologia.',
            'observaciones.required'                         => 'Debe diligenciar las observaciones.',
            'user_contdili_id.required'                      => 'Debe diligenciar el funcionario o contratista que diligencia.',
            // 'user_funcontr_id.required'                      => 'Debe diligenciar el funcionario o contratista que aprueba.',
            'respoupi_id.required'                           => 'Debe diligenciar el responsable de la upi que aprueba.',
            // 'ag_recurso_id.required'                         => 'Seleccione al menos un recurso.',
        ];
        $this->_reglasx = [
            'fechdili'                              => [
                'required',
                'date',
                'date_format:Y-m-d',
                new FechaMenor()
            ],
            'sis_depen_id'                          => ['required', 'exists:sis_depens,id'],
            'sis_servicio_id'                       => ['required', 'exists:sis_servicios,id'],
            'sis_localidad_id'                      => ['required', 'exists:sis_localidads,id'],
            'sis_upz_id'                            => ['required', 'exists:sis_upzs,id'],
            'sis_barrio_id'                         => ['required', 'exists:sis_barrios,id'],
            'prm_accion_id'                         => ['required', 'exists:parametros,id'],
            'prm_actividad_id'                      => ['required', 'exists:parametros,id'],
            'objetivo'                              => ['required', 'string','digits_between:1,500'],
            'desarrollo_actividad'                  => ['required', 'string'],
            'metodologia'                           => ['required', 'string'],
            'observaciones'                         => ['required', 'string'],
            'user_contdili_id'                      => ['required', 'exists:users,id'],
            // 'user_funcontr_id'                      => ['required', 'exists:users,id'],
            'respoupi_id'                           => ['required', 'exists:users,id'],
            // 'ag_recurso_id'                           => ['required'],
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
        $this->_reglasx['fechdili'][]=new TiempoCargueRuleTrait(['estoyenx' => 2,'upixxxxx'=>$this->sis_depen_id]);
        return $this->_reglasx;
    }

}
