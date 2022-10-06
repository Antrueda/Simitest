<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd;

use Illuminate\Foundation\Http\FormRequest;

class VsrrdEntornoEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre del área.',
            'nombre.unique'               => 'Este nombre de entorno ya se encuentra registrado.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del área.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del área.',
        ];
        $this->_reglasx = [
            'nombre'               => ['required', 'string'],
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
        $this->_reglasx['nombre'][2] = 'unique:vsrrd_entornos,nombre,' . $this->segments()[4];
    }
}
