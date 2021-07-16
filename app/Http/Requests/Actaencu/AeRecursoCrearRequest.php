<?php

namespace app\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeRecursoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'fechdili'                              => 'Debe diligenciar la fecha de diligenciamiento.',
            'sis_depen_id'                          => 'Debe diligenciar la upi.',
            'sis_servicio_id'                       => 'Debe diligenciar el servicio.',
            'sis_localidad_id'                      => 'Debe diligenciar la localidad.',
            'sis_upz_id'                            => 'Debe diligenciar la upz.',
            'sis_barrio_id'                         => 'Debe diligenciar el barrio.',
            'prm_accion_id'                         => 'Debe diligenciar la acción.',
            'prm_actividad_id'                      => 'Debe diligenciar la actividad.',
            'objetivo'                              => 'Debe diligenciar el objetivo.',
            'desarrollo_actividad'                  => 'Debe diligenciar el desarrollo de la actividad.',
            'metodologia'                           => 'Debe diligenciar la metodologia.',
            'observaciones'                         => 'Debe diligenciar las observaciones.',
            'user_contdili_id' => 'Debe diligenciar el funcionario o contratista que diligencia.',
            'user_funcontr_id'            => 'Debe diligenciar el funcionario o contratista que aprueba.',
            'respoupi_id'                    => 'Debe diligenciar el responsable de la upi que aprueba.',
        ];
        $this->_reglasx = [
            'fechdili'                              => ['required', 'date', 'date_format:Y-m-d'],
            'sis_depen_id'                          => ['required', 'exists:sis_depens,id'],
            'sis_servicio_id'                       => ['required', 'exists:sis_servicios,id'],
            'sis_localidad_id'                      => ['required', 'exists:sis_localidads,id'],
            'sis_upz_id'                            => ['required', 'exists:sis_upzs,id'],
            'sis_barrio_id'                         => ['required', 'exists:sis_barrios,id'],
            'prm_accion_id'                         => ['required', 'exists:parametros,id'],
            'prm_actividad_id'                      => ['required', 'exists:parametros,id'],
            'objetivo'                              => ['required', 'string'],
            'desarrollo_actividad'                  => ['required', 'string'],
            'metodologia'                           => ['required', 'string'],
            'observaciones'                         => ['required', 'string'],
            'user_contdili_id' => ['required', 'exists:users,id'],
            'user_funcontr_id'            => ['required', 'exists:users,id'],
            'respoupi_id'                    => ['required', 'exists:users,id'],
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
    }
}
