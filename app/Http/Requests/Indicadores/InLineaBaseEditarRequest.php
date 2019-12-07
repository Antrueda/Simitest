<?php

namespace App\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InLineaBaseEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_linea_base.required' => 'Ingrese el nombre de la línea base',
            's_linea_base.unique' => 'La línea base ya se encuentra en uso',
            'i_prm_categoria_id.required' => 'Seleccion una categoria',
        ];
        $this->_reglasx = [
            'i_prm_categoria_id' =>
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
        $this->_reglasx['s_linea_base'] =
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
                'unique:in_linea_bases,s_linea_base,' . $this->segments()[2]
            ];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario

    }
}
