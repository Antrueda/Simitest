<?php

namespace App\Http\Requests\Csd;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdJusticiaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_vinculado_id.required'=>'Seleccione si se encuentra vinculado a la violencia',
            'prm_vin_causa_id.required_if'=>'Seleccione la causa',
            'prm_riesgo_id.required'=>'Seleccione si se encuentra en riesgo de participar en actos delictivos',
            'prm_rie_causa_id.required_if'=>'Seleccione la causa',
     
          ];
        $this->_reglasx = [
            'prm_vinculado_id' => 'required|exists:parametros,id',
            'prm_vin_causa_id' => 'required_if:prm_vinculado_id,227',
            'prm_riesgo_id' => 'required|exists:parametros,id',
            'prm_rie_causa_id' => 'required_if:prm_riesgo_id,227',
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

        }
}
