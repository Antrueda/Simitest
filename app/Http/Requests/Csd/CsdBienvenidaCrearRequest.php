<?php

namespace App\Http\Requests\Csd;


use Illuminate\Foundation\Http\FormRequest;

class CsdBienvenidaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

       
        $this->_mensaje = [
            'prm_persona_id.required' => 'Seleccione una persona',
            'motivos.required'  => 'Seleccione un motivo',
            ];
        $this->_reglasx = [
            'csd_id'    => 'required|exists:csds,id',
            'prm_persona_id' => 'required|exists:parametros,id',
            'motivos'  => 'required|array'
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
