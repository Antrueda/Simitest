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
            'sis_depen_id.required' => 'Seleccione la unidad de atención integral',
            'd_fecha_diligencia.required' => 'Seleccione la fecha de diligenciamiento',
            'fos_sub_tipo_id.required' => 'Seleccione el sub tipo de seguimiento',
            's_observacion.required' => 'Escriba la observación',
            //'fi_compfami_id.required' => 'Escriba el acudiente',
        ];
        $this->_reglasx = [
            'sis_depen_id' => ['Required'],
            'd_fecha_diligencia' => ['Required'],
            'fos_stse_id' => ['Required'],
            's_observacion' => ['Required'],
            //'fi_compfami_id' => ['Required'],
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
