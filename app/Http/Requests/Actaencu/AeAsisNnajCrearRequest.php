<?php

namespace app\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeAsisNnajCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_primer_apellido.required'        => 'Debe diligenciar el primer apellido.',
            's_primer_nombre.required'          => 'Debe diligenciar el primer nombre.',
            'prm_tipodocu_id.required'          => 'Debe diligenciar el tipo de documento.',
            's_documento.required'              => 'Debe diligenciar el número de documento.',
            'd_nacimiento.required'             => 'Debe diligenciar la fecha de nacimiento.',
            'aniosxxx.required'                 => 'Debe diligenciar la edad.',
            'prm_sexo_id.required'              => 'Debe diligenciar el sexo.',
            'sis_localidad_id.required'         => 'Debe diligenciar la localidad.',
            'sis_upz_id.required'               => 'Debe diligenciar la upz.',
            'sis_upzbarri_id.required'          => 'Debe diligenciar el barrio.',

            'i_prm_tipo_via_id.required'        => 'Debe diligenciar el tipo de via principal.',
            's_nombre_via.required'             => 'Debe diligenciar el nombre/número de la via principal.',
            'i_via_generadora.required'         => 'Debe diligenciar el número de la via generadora.',
            'i_placa_vg.required'               => 'Debe diligenciar el placa de la via generadora.',

            'prm_tipoblaci_id.required'         => 'Debe diligenciar el tipo de población.',
            'prm_pefil_id.required'             => 'Debe diligenciar el perfil.',
            'prm_lugar_focali_id.required'      => 'Debe diligenciar el lugar de la focalización.',
            'prm_autorizo_id.required'          => 'Debe diligenciar la autorización.',
            'observaciones.required'            => 'Debe diligenciar las observaciones.',
        ];
        $this->_reglasx = [
            's_primer_apellido'         => ['required', 'string'],
            's_primer_nombre'           => ['required', 'string'],
            'prm_tipodocu_id'           => ['required', 'exists:parametros,id'],
            's_documento'               => ['required', 'numeric', 'digits_between:6,10', 'unique:nnaj_docus,s_documento'],
            'd_nacimiento'              => ['required'],
            'aniosxxx'                  => ['required', 'numeric', 'min:6', 'max:28'],
            'prm_sexo_id'               => ['required', 'exists:parametros,id'],
            'sis_localidad_id'          => ['required', 'exists:sis_localidads,id'],
            'sis_upz_id'                => ['required', 'exists:sis_upzs,id'],
            'sis_upzbarri_id'           => ['required', 'exists:sis_upzbarris,id'],

            'i_prm_tipo_via_id'         => ['required', 'exists:parametros,id'],
            's_nombre_via'              => ['required', 'numeric', 'min:1', 'max:250'],
            'i_via_generadora'          => ['required', 'numeric', 'min:1', 'max:250'],
            'i_placa_vg'                => ['required', 'numeric', 'min:1', 'max:250'],

            'prm_tipoblaci_id'          => ['required', 'exists:parametros,id'],
            'prm_pefil_id'              => ['required', 'exists:parametros,id'],
            'prm_lugar_focali_id'       => ['required', 'exists:parametros,id'],
            'prm_autorizo_id'           => ['required', 'exists:parametros,id'],
            'observaciones'             => ['required', 'string'],
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
