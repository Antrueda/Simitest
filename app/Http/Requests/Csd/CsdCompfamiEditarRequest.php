<?php

namespace App\Http\Requests\Csd;

use App\Models\consulta\CsdComFamiliar;
use App\Rules\CedulaCsdComFamiliarExisteRule;
use App\Rules\CedulaValidaRule;
use Illuminate\Foundation\Http\FormRequest;

class CsdCompfamiEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_primer_apellido.required' => 'Ingrese el priemer apellido',
            's_primer_nombre.required' => 'Ingrese el primer nombre',
            'prm_tipodocu_id.required' => 'Seleccione el tipo de documento',
            's_documento.required' => 'Ingrese el número de documento',
            'd_nacimiento.required' => 'Seleccione la fecha de nacimiento',
            'prm_sexo_id.required' => 'Seleccione el sexo de nacimiento',
            'prm_estado_civil_id.required' => 'Seleccione el estado civil',
            'prm_identidad_genero_id.required' => 'Seleccione la identidad de género',
            'prm_orientacion_sexual_id.required' => 'Seleccione la orientación sexual',
            'prm_etnia_id.required' => 'Seleccione la etnia a la que pertenece',
            'prm_ocupacion_id.required' => 'Seleccione la ocupación',
            'prm_parentezco_id.required' => 'Seleccione el parentezco',
            'prm_convive_id.required' => 'Seleccione convive',
            'prm_visitado_id.required' => 'Seleccione visitado',
            'prm_vin_actual_id.required' => 'Seleccione actual',
            'prm_vin_pasado_id.required' => 'Seleccione pasado',
            'prm_regimen_id.required' => 'Seleccione régimen',
            'prm_cualeps_id.required' => 'Seleccione la eps',

            'prm_discapacidad_id.required' => 'Seleccione la discapacidad',
            'prm_cual_id.required' => 'Seleccione cual',
            'prm_peso_id.required' => 'Seleccione el peso',
            'prm_leer_id.required'       => 'Seleccione leer',
            'prm_escribir_id.required'   => 'Seleccione escribir',
            'prm_operaciones_id.required' => 'Seleccione operaciones',
            'prm_aprobado_id.required'   => 'Seleccione aprobado',
            'prm_educacion_id.required'  => 'Seleccione educación',
            'prm_estudia_id.required'    => 'Seleccione estudia',
        ];
        $this->_reglasx = [
            's_primer_apellido'   => 'required|string|max:120',

            's_primer_nombre'     => 'required|string|max:120',
            'prm_tipodocu_id'  => 'required|exists:parametros,id',
            's_documento'         =>  [
                'required',
                'string',
                'max:120',
                new CedulaValidaRule()
            ],
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

            'prm_discapacidad_id' => 'required|exists:parametros,id',
            'prm_cual_id'       => 'required_if:prm_discapacidad_id,227',
            'prm_peso_id'       => 'required|exists:parametros,id',
            'prm_peso_dos_id'   => 'nullable|exists:parametros,id',
            'prm_leer_id'       => 'required|exists:parametros,id',
            'prm_escribir_id'   => 'required|exists:parametros,id',
            'prm_operaciones_id' => 'required|exists:parametros,id',
            'prm_aprobado_id'   => 'required|exists:parametros,id',
            'prm_educacion_id'  => 'required|exists:parametros,id',
            'prm_estudia_id'    => 'required|exists:parametros,id',
            'prm_sisben_id'     => 'required|exists:parametros,id',
            'prm_discapacidad_id' => 'required|exists:parametros,id',
            'prm_cual_id'       => 'required_if:prm_discapacidad_id,227',
            'prm_peso_id'       => 'required|exists:parametros,id',
            'prm_peso_dos_id'   => 'nullable|exists:parametros,id',
            'prm_leer_id'       => 'required|exists:parametros,id',
            'prm_escribir_id'   => 'required|exists:parametros,id',
            'prm_operaciones_id' => 'required|exists:parametros,id',
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
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();
        $this->_reglasx['s_documento'][4]=new CedulaCsdComFamiliarExisteRule(['metodoxx' => 'getActualiza','registro'=>$this->segments()[3]]);
        return $this->_reglasx;
        
    }
    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        $sisben=['A1','A2','A3','A4','A5','B1','B2','B3','B4','B5','B6','B7',
        'C1','C2','C3','C4','C5','C6','C7','C8','C9','C10','C11','C12','C13','C14','C15','C16','C17','C18',
        'D1','D2','D3','D4','D5','D6','D7','D8','D9','D10','D11','D12','D13','D14','D15','D16','D17','D18','D19','D20','D21'];

    

        if ($dataxxxx['sisben'] == '') {
            $this->_mensaje['prm_sisben_id.required'] = 'Seleccione porqué no tiene Sisben';
            $this->_reglasx['prm_sisben_id'] = 'required';
        }else{
            // $this->_mensaje['sisben.in'] = 'No cumple con el formato del sisben';
            // $this->_reglasx['sisben'] = 'required|in:A1,A2,A3,A4,A5,B1,B2,B3,B4,B5,B6,B7,
            // C1,C2,C3,C4,C5,C6,C7,C8,C9,C10,C11,C12,C13,C14,C15,C16,C17,C18,
            // D1,D2,D3,D4,D5,D6,D7,D8,D9,D10,D11,D12,D13,D14,D15,D16,D17,D18,D19,D20,D21';
        }

    }
}
