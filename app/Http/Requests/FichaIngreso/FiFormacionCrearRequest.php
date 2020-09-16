<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiFormacionCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'i_prm_lee_id.required' => 'Seleccione sabe leer',
            'i_prm_escribe_id.required' => 'Seleccione sabe escribir',
            'i_prm_operaciones_id.required' => 'Seleccione sabe operaciones básicas matemáticas',
            'i_prm_estudia_id.required' => 'Seleccione actualmente estudia',
            'i_prm_jornada_estudio_id.required' => 'Seleccione jornada de estudio',
            'i_prm_naturaleza_entidad_id.required' => 'Seleccione naturaleza de la entidad',

            'i_prm_ultimo_nivel_estudio_id.required' => 'Seleccione último nivel de estudio alcanzado',
            'i_prm_ultimo_grado_aprobado_id.required' => 'Seleccione último grado, modulo, semestre aprobado',
            'i_prm_certificado_ultimo_nivel_id.required' => 'Seleccione certificado último nivel de estudio',
        ];
        $this->_reglasx = [
            'i_prm_lee_id' => ['Required'],
            'i_prm_escribe_id' => ['Required'],
            'i_prm_operaciones_id' => ['Required'],
            'i_prm_estudia_id' => ['Required'],
            'i_prm_jornada_estudio_id' => ['Required'],
            'i_prm_naturaleza_entidad_id' => ['Required'],
            'i_prm_ultimo_nivel_estudio_id' => ['Required'],
            'i_prm_ultimo_grado_aprobado_id' => ['Required'],
            'i_prm_certificado_ultimo_nivel_id' => ['Required'],
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
        if ($this->i_prm_estudia_id == 227) {
            $this->_mensaje['s_institucion_edu.required'] = 'Ingrese nombre de la institución';
            $this->_reglasx['s_institucion_edu'] = ['Required'];
        }
        if ($this->i_dias_sin_estudio == '' && $this->i_meses_sin_estudio == '' && $this->i_anos_sin_estudio == '') {
            if ($this->i_prm_estudia_id == 228) {
                $this->_mensaje['sinestud.required'] = 'Indique cuanto tiempo lleva sin estudiar';
                $this->_reglasx['sinestud'] = ['Required'];
            }
        }
    }
}
