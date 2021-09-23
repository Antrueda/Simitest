<?php

namespace App\Http\Requests\Indicadores;

use App\Models\Indicadores\InFuente;
use Illuminate\Foundation\Http\FormRequest;

class InfuenteCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'in_linea_base_id.required' => 'Seleccione una linea base',
        ];
        $this->_reglasx = [
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
     * Get the validation rules that Apply to the request.
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
        $registro = InFuente::where('in_indicador_id', request()->in_indicador_id)->where('in_linea_base_id', $this->in_linea_base_id)->first();
        if (isset($registro->id)) {
            $this->_reglasx['existexx'][] = 'required';
            $this->_mensaje['existexx.required'] = 'Línea base ya está asignada';
        }
    }
}
