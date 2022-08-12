<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion;

use Illuminate\Foundation\Http\FormRequest;

class LimiteCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'limite.required'               => 'Debe diligenciar la canntidad de limite.',
            'descripcion.required'          => 'Debe diligenciar la descripción del limite.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del limite.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion de la categoria.',
        ];        
        $this->_reglasx = [
            'limite'               => ['required', 'string'],
            'descripcion'          => ['required', 'string'],
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
