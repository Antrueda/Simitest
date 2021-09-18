<?php

namespace app\Http\Requests\FichaIngreso;

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
            'prm_operacio_id.required' => 'Seleccione sabe operaciones básicas matemáticas',
            'i_prm_estudia_id.required' => 'Seleccione actualmente estudia',
            'prm_jornestu_id.required' => 'Seleccione jornada de estudio',
            'prm_natuenti_id.required' => 'Seleccione naturaleza de la entidad',
            'prm_ultniest_id.required' => 'Seleccione último nivel de estudio alcanzado',
            'prm_cerulniv_id.required' => 'Seleccione certificado último nivel de estudio',
        ];
        $this->_reglasx = [
            'i_prm_lee_id' => ['Required'],
            'i_prm_escribe_id' => ['Required'],
            'prm_operacio_id' => ['Required'],
            'i_prm_estudia_id' => ['Required'],
            'prm_jornestu_id' => ['Required'],
            'prm_natuenti_id' => ['Required'],
            'prm_ultniest_id' => ['Required'],

            'prm_cerulniv_id' => ['Required'],
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
        if ($this->diasines == '' && $this->mesinest == '' && $this->anosines == '') {
            if ($this->i_prm_estudia_id == 228) {
                $this->_mensaje['sinestud.required'] = 'Indique cuanto tiempo lleva sin estudiar';
                $this->_reglasx['sinestud'] = ['Required'];
            }
        }
        if ($this->prm_ultniest_id != 829) {
            $this->_mensaje['prm_ultgrapr_id.required'] = 'Seleccione último grado, modulo, semestre aprobado';
            $this->_reglasx['prm_ultgrapr_id'] = ['Required'];
        }

    }
}
