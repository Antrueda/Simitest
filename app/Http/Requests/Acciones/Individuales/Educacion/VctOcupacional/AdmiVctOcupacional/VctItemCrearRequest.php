<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional;

use Illuminate\Foundation\Http\FormRequest;

class VctItemCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre del item.',
            'nombre.unique'                 => 'el nombre del item ya se encuentra en uso',
            'vcto_subarea_id.required'         => 'Debe diligenciar la subarea.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del item.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del item.',
        ];        
        $this->_reglasx = [
            'nombre'               => ['required', 'string','unique:vcto_items,nombre'],
            'vcto_subarea_id'         => ['required'],
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
    }
}
