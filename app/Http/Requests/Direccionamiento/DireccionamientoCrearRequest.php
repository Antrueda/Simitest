<?php

namespace app\Http\Requests\Direccionamiento;

use app\Rules\FechaMenor;
use app\Rules\TiempoCargueRuleTrait;
use Illuminate\Foundation\Http\FormRequest;

class DireccionamientoCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'fecha.required'                                 => 'Debe diligenciar la fecha de diligenciamiento.',
            'upi_id.required'                                => 'Debe diligenciar la UPI.',
            'area_id.required'                               => 'Debe seleccionar que área le corresponde .',
            'prm_tipoenti_id.required'                       => 'Debe diligenciar el tipo de atención(Interinstitucional o Intrainstitucional).',
            's_primer_nombre.required'                       => 'Debe diligenciar primer nombre.',
            's_primer_apellido.required'                     => 'Debe diligenciar primer apellido.',
            'tipo_id.required'                               => 'Debe seleccionar el tipo de formulario.',
            's_documento.required'                           => 'Debe digitar el documento.',
            'prm_tipodocu_id.required'                       => 'Debe diligenciar el tipo de documento.',
            'sis_municipio_id.required'                      => 'Debe diligenciar el municipio.',
            'prm_sexo_id.required'                           => 'Debe diligenciar el sexo de nacimiento.',
            'prm_identidad_genero_id.required'               => 'Debe diligenciar la identidad de género.',
            'prm_orientacion_sexual_id.required'             => 'Debe diligenciar la orientación sexual.',
            'prm_etnia_id.required'                          => 'Debe diligenciar la etnia.',
            'prm_poblacion_etnia_id.required'                => 'Debe diligenciar tipo de población.',
            'prm_discapacidad_id.required_if'                => 'Debe diligenciar que tipo de discapcidad.',
            'prm_cuentadisc_id.required'                     => 'Debe diligenciar si sufre de algún tipo de discapacidad.',
            'prm_condicion_id.required'                      => 'Seleccione si presenta alguna condición especial.',
            'sis_municipio_id.required'                      => 'Debe diligenciar el municipio de expedición de la cedula.',
            'sis_departam_id.required'                       => 'Debe diligenciar el departamento de expedición de la cedula.',
            'departamento_cond_id.required_if'               => 'Debe diligenciar el departamento de la condición.',
            'municipio_cond_id.required_if'                  => 'Debe diligenciar el municipio de la condición.',
            'departamento_cert_id.required_if'               => 'Debe diligenciar el departamento de expedición del certificado.',
            'municipio_cert_id.required_if'                  => 'Debe diligenciar el municipio de expedición del certificado.',
            'intra_id.required_if'                           => 'Debe seleccionar que area de la entidad .',
            'inter_id.required_if'                           => 'Debe seleccionar que area de la entidad .',
            'sis_entidad_id.required_if'                     => 'Debe diligenciar la entidad publica.',
            'ent_servicio_id.required_if'                    => 'Debe diligenciar el servicio o programa de la entidad.',
            'nombre_entidad.required_if'                     => 'Debe diligenciar el nombre de la entidad.',
            'prm_tipoenti_id.required'                       => 'Debe diligenciar que tipo de atención recibe.',
            'seguimiento_id.required'                        => 'Debe diligenciar si se le debe realizar seguimiento.',
            'prm_cabeza_id.required'                         => 'Debe diligenciar si es cabeza de familia.',
            'userr_doc.required_if'                             => 'Debe diligenciar persona que recibe.',
            'no_docinter.required_if'                        => 'Debe diligenciar el documento de la persona que recibe.',
            'nombreinter.required_if'                        => 'Debe diligenciar el nombre y apellido de la persona que recibe.',
            'telefonointer.required_if'                      => 'Debe diligenciar el teléfono de la persona que recibe.',
            'intercargo.required_if'                         => 'Debe diligenciar el cargo o nivel y dependencia de la persona que recibe.',
            'd_nacimiento.required'                         => 'Debe diligenciar la fecha de nacimiento.',


        ];
        $this->_reglasx = [
            'fecha' => 'required','date','date_format:Y-m-d',
            'upi_id' => 'required',
            's_primer_nombre' => 'required',
            's_segundo_nombre' => 'nullable',
            's_primer_apellido'  => 'required',
            'd_nacimiento' => 'required',   
            'tipo_id' => 'required',
            's_segundo_apellido'  => 'nullable',
            's_nombre_identitario' => 'nullable',
            'apodo'  => 'nullable',
            's_documento'=> 'required',
            'prm_tipodocu_id' => 'required',
            'sis_municipio_id'  => 'required',
            'sis_departam_id'  => 'required',
            'prm_sexo_id'=> 'required',
            'prm_identidad_genero_id' => 'required',
            'prm_orientacion_sexual_id'=> 'required',
            'prm_etnia_id'=> 'required',
            'prm_poblacion_etnia_id' => 'required',
            'prm_discapacidad_id'=> 'required_if:prm_cuentadisc_id,227',
            'prm_cuentadisc_id'  => 'required',
            'prm_condicion_id'=> 'required',
            'prm_certifica_id'=> 'nullable',
            'prm_cabeza_id' => 'required',
            'departamento_cond_id'=> 'required_if:prm_condicion_id,227',
            'municipio_cond_id' => 'required_if:prm_condicion_id,227',
            'departamento_cert_id'=> 'required_if:prm_certifica_id,227',
            'municipio_cert_id' => 'required_if:prm_certifica_id,227',
            'intra_id' => 'required_if:prm_tipoenti_id,2707',
            'sis_entidad_id'  => 'required_if:inter_id,690',
            'ent_servicio_id' => 'required_if:inter_id,690',
            'nombre_entidad'  => 'required_if:inter_id,691',
            'prm_tipoenti_id' => 'required',
            'inter_id' => 'required_if:prm_tipoenti_id,2708',
            'prm_docuaco_id' => 'nullable',
            'primer_nombreaco' => 'nullable',
            'segundo_nombreaco'  => 'nullable',
            'primer_apellidoaco' => 'nullable',
            'segundo_apellidoaco'  => 'nullable',
            'documentoaco' => 'nullable',
            'userd_doc'=> 'required',
            'userr_doc' => 'required_if:prm_tipoenti_id,2707',
            'sis_nnaj_id' => 'nullable',
            'area_id'=> 'required',
            'justificacion' => 'nullable',
            'seguimiento_id'=> 'required',
            'no_docinter'=> 'required_if:prm_tipoenti_id,2708',
            'nombreinter'=> 'required_if:prm_tipoenti_id,2708',
            'telefonointer'=> 'required_if:prm_tipoenti_id,2708',
            'intercargo'=> 'required_if:prm_tipoenti_id,2708',

           
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

        if($this->prm_condicion_id!=853){
            $this->_reglasx['prm_certifica_id'] = 'required';
            $this->_mensaje['prm_certifica_id.required'] =  'Debe diligenciar el si esta certificado';

            }

 
    }
}

