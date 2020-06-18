<?php

namespace App\Http\Requests\Indicadores;

use App\Models\Indicadores\InIndicador;
use Illuminate\Foundation\Http\FormRequest;
class InIndicadorUpdateRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_indicador.required' => 'Ingrese el nombre del indicador',
            's_indicador.unique' => 'el indicador ya se encuentra en uso',
            'area_id.required' => 'el seleccione un área',
        ];
        $this->_reglasx = [
            'area_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            's_indicador' =>
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
        $this->_reglasx['s_indicador'][1]='unique:in_indicadors,s_indicador,' . $this->segments()[2];
    }
}
