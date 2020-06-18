<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiFormacionUpdateRequest extends FormRequest
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
            'jornestu_id.required' => 'Seleccione jornada de estudio',
            'natuenti_id.required' => 'Seleccione naturaleza de la entidad',
            'sis_institucion_edu_id.required' => 'Seleccione nombre de la institución',
            'nivestud_id.required' => 'Seleccione último nivel de estudio alcanzado',
            'gradapro_id.required' => 'Seleccione último grado, modulo, semestre aprobado',
            'certnive_id.required' => 'Seleccione certificado último nivel de estudio',
            'i_prm_motivo_vinc_id.required' => 'Seleccione motivos de vinculación al IDIPRON',
            
        ];
        $this->_reglasx = [
            'i_prm_lee_id' => ['Required'],
            'i_prm_escribe_id' => ['Required'],
            'i_prm_operaciones_id' => ['Required'],
            'i_prm_estudia_id' => ['Required'],
            'jornestu_id' => ['Required'],
            'natuenti_id' => ['Required'],
            'sis_institucion_edu_id' => ['Required'],
            'nivestud_id' => ['Required'],
            'gradapro_id' => ['Required'],
            'certnive_id' => ['Required'],
            'i_prm_motivo_vinc_id' => ['Required'],
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
