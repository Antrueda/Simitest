<?php

namespace App\Http\Requests\Acciones\Grupales\InscripcionFormacion;

use App\Models\Acciones\Grupales\Educacion\IEstadoMs;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use Illuminate\Foundation\Http\FormRequest;

class InscripcionnnajRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'sis_nnaj_id.required'=>'Seleccione un NNAJ',
            'etapa_id.required'=>'Seleccione la Etapa',
            'sis_esta_id.required_if'=>'Seleccione el estado',
            'novedad_id.required_if'=>'Seleccione la novedad de inactivación',
            'fechainactivo.required_if'=>'Seleccione la fecha de inactivación',
            'modalidad_id.required_if'=>'Seleccione la modalidad de etapa productiva',
            'fechapro_inicio.required_if'=>'Seleccione la fecha de inicio de etapa productiva',
            'fechapro_final.required_if'=>'Seleccione la fecha final de etapa productiva',
            'observaciones.required_if'=>'Digité una observación',
            ];
        $this->_reglasx = [
            'sis_nnaj_id' => 'required',
            'etapa_id' => 'required',
            'sis_esta_id' => 'required_if:etapa_id,3027',
            'observaciones' => 'required_if:etapa_id,3027',
            'novedad_id' => 'required_if:sis_esta_id,2',
            'fechainactivo' => 'required_if:sis_esta_id,2',
            'modalidad_id' => 'required_if:etapa_id,3028',
            'fechapro_inicio'=> 'required_if:etapa_id,3028',
            'fechapro_final' => 'required_if:etapa_id,3028',
            
            
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
     * Get the validation rules that Apply to the request.
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


