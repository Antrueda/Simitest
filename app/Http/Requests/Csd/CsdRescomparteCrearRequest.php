<?php

namespace App\Http\Requests\Csd;

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

        }
}
