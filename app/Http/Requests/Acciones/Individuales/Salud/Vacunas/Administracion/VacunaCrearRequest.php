<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\Vacunas\Administracion;

use Illuminate\Foundation\Http\FormRequest;

class VacunaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [

          
            //'categorias_id.required'        => 'Debe diligenciar una categoria.',
          //  'cursos_id.required'            => 'Debe diligenciar un curso.',
           // 'prm_letras_id.required'          => 'Debe diligenciar la letra.',
            'nombre.required'          => 'Debe diligenciar la letra.',
            'descripcion.required'          => 'Debe diligenciar la letra.',
            'estusuarios_id.required'       => 'Debe seleccionar el estado de la actividad.',
            'sis_esta_id.required'          => 'Debe seleccionar la justificacion del estado de la actividad.',
        ];
    

        $this->_reglasx = [
           // 'categorias_id'        => ['required', 'integer', 'exists:categorias,id'],
          //  'cursos_id'            => ['required', 'integer', 'exists:cursos,id'],
           // 'prm_letras_id'            => ['required', 'integer', 'exists:cursos,id'],
            'nombre'          => ['required', 'string'],
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
