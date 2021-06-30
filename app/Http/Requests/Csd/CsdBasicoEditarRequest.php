<?php

namespace App\Http\Requests\Csd;

use App\Rules\ValidarCedula;
use Illuminate\Foundation\Http\FormRequest;

class CsdBasicoEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_primer_nombre.required' => 'Ingrese el primer nombre',
            's_primer_apellido.required' => 'Ingrese el segundo apellido',
            'prm_sexo_id.required' => 'Seleccione el sexo',
            'prm_identidad_genero_id.required' => 'Indique la identidad de género',
            'prm_orientacion_sexual_id.required' => 'Seleccione la orientación sexual',
            'd_nacimiento.required' => 'Seleccione una fecha de nacimiento o ingres la edad',
            'sis_municipio_id.required' => 'Seleccione el municipio de nacimiento',
            'prm_tipodocu_id.required' => 'Seleccione un tipo de documento',
            'prm_doc_fisico_id.required' => 'Indique si tiene documento físico',
            'prm_ayuda_id.required' => 'Seleccione un motivo por que no tiene documento',
            's_documento.required' => 'Ingrese un documento',
            'sis_municipioexp_id.required' => 'Seleccione  el municipio de expedición del documento',
            'prm_gsanguino_id.required' => 'Seleccione el grupo sanguíneo',
            'prm_factor_rh_id.required' => 'Seleccione el factor rh',
            'prm_situacion_militar_id.required_if' => 'Indique si tiene la situacion militar definida',
            'prm_clase_libreta_id.required' => 'Indique la clase de la libreta militar',
            'prm_estado_civil_id.required' => 'Seleccione el estado civil',
            'prm_etnia_id.required' => 'Seleccione la etnia',
            'prm_tipoblaci_id.required' => 'Seleccione el tipo de población',

        ];
        $this->_reglasx = [
            's_primer_nombre' => 'required|string|max:120',
            's_primer_apellido' => 'required|string|max:120',
            'prm_sexo_id' => 'required|exists:parametros,id',
            'd_nacimiento' => 'required',
            'prm_identidad_genero_id' => 'required|exists:parametros,id',
            'prm_orientacion_sexual_id' => 'required|exists:parametros,id',
            'prm_tipodocu_id' => 'required|exists:parametros,id',
            'prm_doc_fisico_id' => 'required|exists:parametros,id',
            'prm_gsanguino_id' => 'required|exists:parametros,id',
            'prm_factor_rh_id' => 'required|exists:parametros,id',
            'prm_situacion_militar_id' => 'required_if:prm_sexo_id,20|exists:parametros,id',
            'prm_clase_libreta_id' => 'required|exists:parametros,id',
            'prm_estado_civil_id' => 'required|exists:parametros,id',
            'prm_etnia_id' => 'required|exists:parametros,id',
            'prm_ayuda_id' => 'required|exists:parametros,id',
            'prm_tipoblaci_id' => 'required|exists:parametros,id',
            'sis_municipio_id' => 'required|exists:sis_municipios,id',
            'sis_municipioexp_id' => 'required|exists:sis_municipios,id',
            's_documento' => ['required'],
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
        $this->_reglasx['s_documento'][1]=new ValidarCedula(['document'=>1,'metodoxx'=>1]);
        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {
    }
}
