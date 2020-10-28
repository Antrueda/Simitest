<?php

namespace App\Http\Requests\Csd;

use App\Models\consulta\pivotes\CsdRescomparte;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdRescomparteCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_espacio_id.required'=>'Seleccione el tipo de espacio',
            'prm_otrafamilia_id.required'=>'Indique si comparte',
            ];
        $this->_reglasx = [
            'prm_espacio_id' => 'required|exists:parametros,id',
            'prm_otrafamilia_id' => 'required|exists:parametros,id',
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
            $registro = CsdRescomparte::select('csd_rescomparte.id')
            ->join('csd_residencias', 'csd_rescomparte.csd_residencia_id', '=', 'csd_residencias.id')
            ->where('csd_residencias.id', $this->segments()[0])
            ->where('csd_rescomparte.prm_espacio_id', $this->prm_espacio_id)
            ->first();

        if (isset($registro->id)) {
            $this->_mensaje['existexx.required'] = 'el espacio ya existe';
            $this->_reglasx['existexx'] = ['Required',];
        }
        }
}
