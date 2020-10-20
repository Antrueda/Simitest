<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdVisitadoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'sis_nnaj_id.required' => 'Seleccione el NNAJ visitado',
            'sis_esta_id.required'=>'Seleccione un estado',
        ];
        $this->_reglasx = [
            'sis_esta_id' => 'required',
            'sis_nnaj_id' => 'required',
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
