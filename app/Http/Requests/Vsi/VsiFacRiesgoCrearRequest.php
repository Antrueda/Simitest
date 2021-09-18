<?php

namespace app\Http\Requests\Vsi;

use app\Models\sicosocial\VsiFacRiesgo;
use Illuminate\Foundation\Http\FormRequest;

class VsiFacRiesgoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'riesgo.required' => 'Ingrese el riesgo',
        ];
        $this->_reglasx = [
            'riesgo' => 'required|string|max:120'
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
        
        $registro = VsiFacRiesgo::select('vsi_fac_riesgos.riesgo')
        ->join('vsis', 'vsi_fac_riesgos.vsi_id', '=', 'vsis.id')
        ->where('vsis.id', $this->padrexxx) 
        ->where('vsi_fac_riesgos.riesgo', $this->riesgo)
        ->first();
        //ddd( $registro);
    if (isset($registro)) {
        $this->_mensaje['existexx.required'] = 'el factor riesgo ya existe';
        $this->_reglasx['existexx'] = ['Required',];
    }
    }
}
