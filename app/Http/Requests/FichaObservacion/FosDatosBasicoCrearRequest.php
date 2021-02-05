<?php

namespace App\Http\Requests\FichaObservacion;

use App\Rules\FechaMenor;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Foundation\Http\FormRequest;

class FosDatosBasicoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

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
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->d_fecha_diligencia,
                'upixxxxx' => $this->sis_depen_id,
                'formular'=>2,
                ]);
                if (!$puedexxx['tienperm']) {
                    $this->_mensaje['sinpermi.required'] =  $puedexxx['msnxxxxx'];
                    $this->_reglasx['sinpermi'] = 'required';
                }
        }
        $this->validar();

        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
