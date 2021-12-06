<?php

namespace App\Http\Requests\Csd;

use App\Models\consulta\pivotes\CsdReshogar;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdReshogarEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_espacio_id.required'=>'Seleccione el tipo de espacio',
            'espaciocant.required'=>'Indique cuantos',
            ];
        $this->_reglasx = [
            'prm_espacio_id' => 'required|exists:parametros,id',
            'espaciocant' => 'required|min:0|max:20',
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
        $this->validar();
        return $this->_reglasx;    }

        public function validar()
        {
            $registro = CsdReshogar::select('csd_reshogars.id')
            ->join('csd_residencias', 'csd_reshogars.csd_residencia_id', '=', 'csd_residencias.id')
            ->where('csd_residencias.id',  $this->padrexxx->csd->csdresidencia->id)
            ->where('csd_reshogars.prm_espacio_id', $this->prm_espacio_id)
            ->first();

        if (isset($registro->id)) {
            $this->_mensaje['existexx.required'] = 'el espacio ya existe';
            $this->_reglasx['existexx'] = ['Required',];
        }
        }
}
