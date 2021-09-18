<?php

namespace app\Http\Requests\Acciones\Individuales;

use app\Models\Acciones\Individuales\Pivotes\EvasionVestuario;
use app\Models\consulta\pivotes\CsdReshogar;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EvasionVestuarioRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_vestuario_id.required'=>'Seleccione el tipo de prenda',
            'material.required'=>'Indique cuantos',
            'color.required'=>'Indique cuantos',
            ];
        $this->_reglasx = [
            'prm_vestuario_id' => 'required|exists:parametros,id',
            'color' => 'required',
            'material' => 'required',
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
        return $this->_reglasx;    }

        public function validar()
        {
            $registro = EvasionVestuario::select('evasion_vestuarios.id')
            ->join('ai_reporte_evasions', 'evasion_vestuarios.reporte_evasion_id', '=', 'ai_reporte_evasions.id')
            ->where('ai_reporte_evasions.id', $this->segments()[1])
            ->where('evasion_vestuarios.prm_vestuario_id', $this->prm_vestuario_id)
            ->first();
            
        if (isset($registro->id)) {
            $this->_mensaje['existexx.required'] = 'La prenda ya existe';
            $this->_reglasx['existexx'] = ['Required',];
        }
        }
}
