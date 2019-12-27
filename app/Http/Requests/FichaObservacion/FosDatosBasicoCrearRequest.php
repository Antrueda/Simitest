<?php

namespace App\Http\Requests\FichaObservacion;

use Illuminate\Foundation\Http\FormRequest;

class FosDatosBasicoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'sis_dependencia_id.required' => 'Seleccione la unidad de atención integral',
            'd_fecha_diligencia.required' => 'Seleccione la fecha de diligenciamiento',
            'prm_area_id.required' => 'Seleccione el área',
            'prm_seguimiento_id.required' => 'Seleccione el tipo de seguimiento',
            'prm_sub_tipo_id.required' => 'Seleccione el sub tipo de seguimiento',
            's_observacion.required' => 'Escriba la observación',
            //'fi_composicion_fami_id.required' => 'Escriba el acudiente',
        ];
        $this->_reglasx = [
            'sis_dependencia_id' => ['Required'],
            'd_fecha_diligencia' => ['Required'],
            'prm_area_id' => ['Required'],
            'prm_seguimiento_id' => ['Required'],
            'prm_sub_tipo_id' => ['Required'],
            's_observacion' => ['Required'],
            //'fi_composicion_fami_id' => ['Required'],
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
    }
}