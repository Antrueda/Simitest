<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdCompfamiEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'primer_apellido.required'=>'Seleccione si se encuentra vinculado a la violencia',
            'primer_nombre.required'=>'Seleccione si se encuentra en riesgo de participar en actos delictivos',
            'prm_documento_id.required'=>'Seleccione si se encuentra vinculado a la violencia',
            'documento.required'=>'Seleccione la causa',
            'nacimiento.required'=>'Seleccione si se encuentra en riesgo de participar en actos delictivos',
            'prm_sexo_id.required'=>'Seleccione la causa',
            'prm_estadoivil_id.required'=>'Seleccione si se encuentra vinculado a la violencia',
            'prm_genero_id.required'=>'Seleccione la causa',
            'prm_sexual_id.required'=>'Seleccione si se encuentra en riesgo de participar en actos delictivos',
            'prm_grupo_etnico_id.required'=>'Seleccione la causa',
            'prm_ocupacion_id.required'=>'Seleccione si se encuentra vinculado a la violencia',
            'prm_parentezco_id.required'=>'Seleccione la causa',
            'prm_convive_id.required'=>'Seleccione si se encuentra en riesgo de participar en actos delictivos',
            'prm_visitado_id.required'=>'Seleccione la causa',
            'prm_vin_actual_id.required'=>'Seleccione si se encuentra vinculado a la violencia',
            'prm_vin_pasado_id.required'=>'Seleccione la causa',
            'prm_regimen_id.required'=>'Seleccione si se encuentra en riesgo de participar en actos delictivos',
            'prm_cualeps_id.required'=>'Seleccione la causa',
            'sisben.required'=>'Seleccione si se encuentra vinculado a la violencia',
            'prm_sisben_id.required'=>'Seleccione la causa',
            'prm_discapacidad_id.required'=>'Seleccione si se encuentra en riesgo de participar en actos delictivos',
            'prm_cual_id.required'=>'Seleccione la causa',
            'prm_peso_id.required'=>'Seleccione si se encuentra en riesgo de participar en actos delictivos',
            'prm_peso_dos_id.required'=>'Seleccione la causa',
            'prm_leer_id.required'       => 'Seleccione la causa',
            'prm_escribir_id.required'   => 'Seleccione la causa',
            'prm_operaciones_id.required'=> 'Seleccione la causa',
            'prm_aprobado_id.required'   => 'Seleccione la causa',
            'prm_educacion_id.required'  => 'Seleccione la causa',
            'prm_estudia_id.required'    => 'Seleccione la causa',

          ];
        $this->_reglasx = [
            'primer_apellido'   => 'required|string|max:120',
            'segundo_apellido'  => 'nullable|string|max:120',
            'primer_nombre'     => 'required|string|max:120',
            'segundo_nombre'    => 'nullable|string|max:120',
            'identitario'       => 'nullable|string|max:120',
            'prm_documento_id'  => 'required|exists:parametros,id',
            'documento'         => 'required|string|max:120',
            'nacimiento'        => 'required|date',
            'prm_sexo_id'       => 'required|exists:parametros,id',
            'prm_estadoivil_id' => 'required|exists:parametros,id',
            'prm_genero_id'     => 'nullable|exists:parametros,id',
            'prm_sexual_id'     => 'nullable|exists:parametros,id',
            'prm_grupo_etnico_id' => 'required|exists:parametros,id',
            'prm_cualGrupo_id'  => 'required_if:prm_grupo_etnico_id,157',
            'prm_ocupacion_id'  => 'required|exists:parametros,id',
            'prm_parentezco_id' => 'required|exists:parametros,id',
            'prm_convive_id'    => 'required|exists:parametros,id',
            'prm_visitado_id'   => 'required|exists:parametros,id',
            'prm_vin_actual_id' => 'required|exists:parametros,id',
            'prm_vin_pasado_id' => 'required|exists:parametros,id',
            'prm_regimen_id'    => 'required|exists:parametros,id',
            'prm_cualeps_id'    => 'required_if:prm_regimen_id,227',
            'sisben'            => 'required|integer|min:0|max:99',
            'prm_sisben_id'     => 'required|exists:parametros,id',
            'prm_discapacidad_id' => 'required|exists:parametros,id',
            'prm_cual_id'       => 'required_if:prm_discapacidad_id,227',
            'prm_peso_id'       => 'required|exists:parametros,id',
            'prm_peso_dos_id'   => 'required|exists:parametros,id',
            'prm_leer_id'       => 'required|exists:parametros,id',
            'prm_escribir_id'   => 'required|exists:parametros,id',
            'prm_operaciones_id'=> 'required|exists:parametros,id',
            'prm_aprobado_id'   => 'required|exists:parametros,id',
            'prm_educacion_id'  => 'required|exists:parametros,id',
            'prm_estudia_id'    => 'required|exists:parametros,id',
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
        return $this->_reglasx;    }

        public function validar()
        {

        }
}
