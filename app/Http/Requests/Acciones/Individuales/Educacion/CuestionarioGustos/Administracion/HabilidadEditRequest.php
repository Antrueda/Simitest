<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion;

use Illuminate\Foundation\Http\FormRequest;

class HabilidadEditRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            //'categorias_id.required'        => 'Debe diligenciar una categoria.',
            'cursos_id.required'            => 'Debe diligenciar un curso.',
            //'habilidades.required'          => 'Debe diligenciar la habilidad.',
            'estusuarios_id.required'       => 'Debe seleccionar el estado de la actividad.',
            'sis_esta_id.required'          => 'Debe seleccionar la justificacion del estado de la actividad.',
        ];
        $this->_reglasx = [
            //'categorias_id'        => ['required', 'integer', 'exists:categorias,id'],
            'cursos_id'            => ['required', 'integer', 'exists:cursos,id'],
            //'habilidades'          => ['required', 'string'],
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
        // $this->_reglasx['nombre'][3]='unique:temas,nombre,'.$this->segments()[3];
    }
}
