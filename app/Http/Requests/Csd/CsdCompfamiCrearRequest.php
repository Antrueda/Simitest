<?php

namespace App\Http\Requests\Csd;

use App\Models\consulta\CsdComFamiliar;
use Illuminate\Foundation\Http\FormRequest;

class CsdCompfamiCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_primer_apellido.required'=>'Ingrese el priemer apellido',
            's_primer_nombre.required'=>'Ingrese el primer nombre',
            'prm_tipodocu_id.required'=>'Seleccione el tipo de documento',
            's_documento.required'=>'Ingrese el número de documento',
            'd_nacimiento.required'=>'Seleccione la fecha de nacimiento',
            'prm_sexo_id.required'=>'Seleccione el sexo de nacimiento',
            'prm_estado_civil_id.required'=>'Seleccione el estado civil',
            'prm_identidad_genero_id.required'=>'Seleccione la identidad de género',
            'prm_orientacion_sexual_id.required'=>'Seleccione la orientación sexual',
            'prm_etnia_id.required'=>'Seleccione la etnia a la que pertenece',
            'prm_ocupacion_id.required'=>'Seleccione la ocupación',
            'prm_parentezco_id.required'=>'Seleccione el parentezco',
            'prm_convive_id.required'=>'Seleccione convive',
            'prm_visitado_id.required'=>'Seleccione visitado',
            'prm_vin_actual_id.required'=>'Seleccione actual',
            'prm_vin_pasado_id.required'=>'Seleccione pasado',
            'prm_regimen_id.required'=>'Seleccione régimen',
            'prm_cualeps_id.required'=>'Seleccione la eps',
            'sisben.required'=>'Ingree puntaje sisben',
            'prm_sisben_id.required'=>'Seleccione sisben',
            'prm_discapacidad_id.required'=>'Seleccione seleccione la discapacidad',
            'prm_cual_id.required'=>'Seleccione cual',
            'prm_peso_id.required'=>'Seleccione el peso',
            
            'prm_leer_id.required'       => 'Seleccione leer',
            'prm_escribir_id.required'   => 'Seleccione escribir',
            'prm_operaciones_id.required'=> 'Seleccione operaciones',
            'prm_aprobado_id.required'   => 'Seleccione aprobado',
            'prm_educacion_id.required'  => 'Seleccione educación',
            'prm_estudia_id.required'    => 'Seleccione estudia',
          ];
        $this->_reglasx = [
            's_primer_apellido'   => 'required|string|max:120',

            's_primer_nombre'     => 'required|string|max:120',
            'prm_tipodocu_id'  => 'required|exists:parametros,id',
            's_documento'         => 'required|string|max:120',
            'd_nacimiento'        => 'required|date',
            'prm_sexo_id'       => 'required|exists:parametros,id',
            'prm_estado_civil_id' => 'required|exists:parametros,id',
            'prm_identidad_genero_id'     => 'nullable|exists:parametros,id',
            'prm_orientacion_sexual_id'     => 'nullable|exists:parametros,id',
            'prm_etnia_id' => 'required|exists:parametros,id',
            'prm_poblacion_etnia_id'  => 'required_if:prm_etnia_id,157',
            'prm_ocupacion_id'  => 'required|exists:parametros,id',
            'prm_parentezco_id' => 'required|exists:parametros,id',
            'prm_convive_id'    => 'required|exists:parametros,id',
            'prm_visitado_id'   => 'required|exists:parametros,id',
            'prm_vin_actual_id' => 'required|exists:parametros,id',
            'prm_vin_pasado_id' => 'required|exists:parametros,id',
            'prm_regimen_id'    => 'required|exists:parametros,id',
            'prm_cualeps_id'    => 'required_if:prm_regimen_id,227',
            'sisben'            => 'required_if:prm_sisben_id,null|between:0,99.99',
            'prm_sisben_id'     => 'required|exists:parametros,id',
            'prm_discapacidad_id' => 'required|exists:parametros,id',
            'prm_cual_id'       => 'required_if:prm_discapacidad_id,227',
            'prm_peso_id'       => 'required|exists:parametros,id',
            'prm_peso_dos_id'   => 'nullable|exists:parametros,id',
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
        return $this->_reglasx;  
    
    }

        public function validar()
        {
            $registro = CsdComFamiliar::select('csd_com_familiars.id')
            ->join('csds', 'csd_com_familiars.csd_id', '=', 'csds.id')
            ->where('csds.id', $this->segments()[0])
            ->where('csd_com_familiars.s_documento', $this->s_documento)
            ->first();

        if (isset($registro->id)) {
            $this->_mensaje['existexx.required'] = 'El registro ya existe';
            $this->_reglasx['existexx'] = ['Required',];
        }
        }
}
