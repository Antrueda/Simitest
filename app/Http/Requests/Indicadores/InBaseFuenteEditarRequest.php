<?php

namespace app\Http\Requests\Indicadores;

use app\Models\Indicadores\InBaseFuente;
use Illuminate\Foundation\Http\FormRequest;

class InBaseFuenteEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'sis_docfuen_id.required' => 'Seleccione un documento fuente',
        ];
        $this->_reglasx = [
            'sis_docfuen_id' =>
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
        $registro=InBaseFuente::
        where('in_fuente_id',$this->segments()[2])
        ->where('sis_docfuen_id',$this->sis_docfuen_id)
        ->first();
        if(isset($registro->id)){
            $this->_mensaje['existexx.required'] = 'Seleccione un documento fuente';
            $this->_reglasx['existexx'] = 'required';
        }
    }
}
