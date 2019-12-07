<?php

namespace App\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InfuenteCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'in_doc_indi_id.required' => 'Seleccione un documento fuente',
            'in_linea_base_id.required' => 'Seleccione una linea base',
        ];
        $this->_reglasx = [

            'in_doc_indi_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'in_linea_base_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        
    }
}
