<?php

namespace App\Http\Requests\Csd;

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

        }
}
