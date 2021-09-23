<?php

namespace App\Http\Requests\Indicadores;

use App\Models\Indicadores\InActsoporte;
use Illuminate\Foundation\Http\FormRequest;

class InActsoporteCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'sis_fsoporte_id.required' => 'Seleccione un documento fuente',
        ];
        $this->_reglasx = [
            'sis_fsoporte_id' => ['required',],

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
        $registro = InActsoporte::where('in_accion_gestion_id', $this->sis_fsoporte_id)
            ->where('sis_fsoporte_id', $this->sis_fsoporte_id)
            ->first();
        if (isset($registro->id)) {
            $this->_reglasx['existexx'] = 'required';
            $this->_mensaje['existexx.required'] = 'La actividad y el documento fuente ya estan asociados';
        }
    }
}
