<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd;

use Illuminate\Foundation\Http\FormRequest;

class VsrrdEntornoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre del entorno.',
            'nombre.unique'               => 'Este nombre de entorno ya se encuentra registrado.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del entorno.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del entorno.',
        ];
        $this->_reglasx = [
            'nombre'               => ['required', 'string', 'unique:vsrrd_entornos,nombre'],
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
