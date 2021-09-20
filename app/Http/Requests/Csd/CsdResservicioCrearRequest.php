<?php

namespace app\Http\Requests\Csd;

use app\Models\consulta\pivotes\CsdResservi;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdResservicioCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_servicio_id.required'=>'Seleccione el tipo de servicio',
            'prm_legalxxx_id.required'=>'Indique si es legal',
            ];
        $this->_reglasx = [
            'prm_servicio_id' => 'required|exists:parametros,id',
            'prm_legalxxx_id' => 'required|exists:parametros,id',
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
           
            $registro = CsdResservi::select('csd_resservis.id')
            ->join('csd_residencias', 'csd_resservis.csd_residencia_id', '=', 'csd_residencias.id')
            ->where('csd_residencias.id', $this->padrexxx->csd->csdresidencia->id) 
            ->where('csd_resservis.prm_servicio_id', $this->prm_servicio_id)
            ->first();
                
        if (isset($registro->id)) {
            $this->_mensaje['existexx.required'] = 'el servicio ya existe';
            $this->_reglasx['existexx'] = ['Required',];
        }
        }
}
