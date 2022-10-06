<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class VsrrdEntornoFactorCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'vsrrd_entorno_id.required'               => 'Debe seleccionar un entorno.',
            'vsrrd_factor_id.required'               => 'Debe seleccionar un factor.',
            'vsrrd_factor_id.unique'               => 'La asociacion del entorno y factor ya fue registrada.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del factor.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del factor.',
        ];
        $this->_reglasx = [
            'vsrrd_entorno_id'               => ['required'],
            'vsrrd_factor_id'               => ['required',],
            'estusuarios_id'       => ['required', 'integer', 'exists:estusuarios,id'],
            'sis_esta_id'          => ['required', 'integer', 'exists:sis_estas,id'],
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
        $entorno = $this->vsrrd_entorno_id;
        $factor = $this->vsrrd_factor_id;

        $this->_reglasx['vsrrd_factor_id'][1] =   Rule::unique('vsrrd_entor_factors')->where(function ($query) use ($entorno, $factor) {
            return $query->where('vsrrd_entorno_id', $entorno)->where('vsrrd_factor_id', $factor);
        });
    }
}
