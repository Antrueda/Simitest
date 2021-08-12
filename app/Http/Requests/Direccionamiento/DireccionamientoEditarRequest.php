<?php

namespace App\Http\Requests\Direccionamiento;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRuleTrait;
use Illuminate\Foundation\Http\FormRequest;

class DireccionamientoEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'fecha.required'                                 => 'Debe diligenciar la fecha de diligenciamiento.',
            'upi_id.required'                                => 'Debe diligenciar la upi.',
            'area_id.required'                               => 'Debe seleccionar que area le corresponde .',
            'prm_tipoenti_id.required'                       => 'Debe diligenciar el tipo de atención(Interinstitucional o Intrainstitucional).',
            's_primer_nombre.required'                       => 'Debe diligenciar primer nombre.',
            's_primer_apellido.required'                     => 'Debe diligenciar primer apellido.',
            'tipo_id.required'                               => 'Debe seleccionar el tipo de formulario.',
            's_documento.required'                           => 'Debe digitar el documento.',
            'prm_tipodocu_id.required'                       => 'Debe diligenciar el tipo de documento.',
            'sis_municipio_id.required'                      => 'Debe diligenciar el municipio.',
            'prm_sexo_id.required'                           => 'Debe diligenciar el sexo.',
            'prm_identidad_genero_id.required'               => 'Debe diligenciar la identidad de genero.',
            'prm_orientacion_sexual_id.required'             => 'Debe diligenciar la orientación sexual.',
            'prm_etnia_id.required'                          => 'Debe diligenciar la etnia.',
            'prm_poblacion_etnia_id.required'                => 'Debe diligenciar tipo de población.',
            'prm_discapacidad_id.required_if'                => 'Debe diligenciar que tipo de discapcidad.',
            'prm_cuentadisc_id.required'                     => 'Debe diligenciar si sufre de algun tipo de discapacidad.',
            'prm_condicion_id.required'                      => 'Seleccione si presenta alguna condición especial.',
            'prm_certifica_id.required'                      => 'Debe diligenciar el si esta certificado.',
            'sis_municipio_id.required'                      => 'Debe diligenciar el municipio de expedición de la cedula.',
            'departamento_cond_id.required_if'               => 'Debe diligenciar el departamento de expedición del certificado.',
            'municipio_cond_id.required_if'                  => 'Debe diligenciar el municipio de expedición del certificado.',
            'intra_id.required_if'                           => 'Debe seleccionar que area de la entidad .',
            'inter_id.required_if'                           => 'Debe seleccionar que area de la entidad .',
            'sis_entidad_id.required_if'                     => 'Debe diligenciar la entidad publica.',
            'ent_servicio_id.required_if'                    => 'Debe diligenciar el servicio o programa de la entidad.',
            'nombre_entidad.required_if'                     => 'Debe diligenciar el nombre de la entidad.',
            'prm_tipoenti_id.required'                       => 'Debe diligenciar que tipo de atención recibe.',
            'seguimiento_id.required'                       => 'Debe diligenciar si se le debe realizar seguimiento.',
            'prm_cabeza_id.required'                       => 'Debe diligenciar si es cabeza de familia.',


        ];
        $this->_reglasx = [
            'fecha'                              => ['required','date','date_format:Y-m-d',new FechaMenor(),new TiempoCargueRuleTrait(['estoyenx'=>1])],
            'upi_id'  => ['required'],
            's_primer_nombre'   => ['required'],
            's_segundo_nombre'  => ['nullable'],
            's_primer_apellido'  => ['required'],
            'tipo_id' => ['required'],
            's_segundo_apellido'  => ['nullable'],
            's_nombre_identitario' => ['nullable'],
            'apodo'  => ['nullable'],
            's_documento'=> ['required'],
            'prm_tipodocu_id' => ['required'],
            'sis_municipio_id'  => ['required'],
            'prm_sexo_id'=> ['required'],
            'prm_identidad_genero_id' => ['required'],
            'prm_orientacion_sexual_id'=> ['required'],
            'prm_etnia_id'=> ['required'],
            'prm_poblacion_etnia_id' => ['required,'],
            'prm_discapacidad_id'=> ['required_if:prm_cuentadisc_id,227'],
            'prm_cuentadisc_id'  => ['required'],
            'prm_condicion_id'=> ['required'],
            'prm_certifica_id'=> ['required'],
            'prm_cabeza_id' => ['required'],
            'departamento_cond_id'=> ['required_if:prm_certifica_id,227'],
            'municipio_cond_id' => ['required_if:prm_certifica_id,227'],
            'intra_id' => ['required_if:prm_tipoenti_id,2687'],
            'sis_entidad_id'  => ['required_if:inter_id,690'],
            'ent_servicio_id' => ['required_if:inter_id,690'],
            'nombre_entidad'  => ['required_if:inter_id,691'],
            'prm_tipoenti_id' => ['required'],
            'inter_id' => ['required_if:prm_tipoenti_id,2688'],
            'prm_docuaco_id' => ['nullable'],
            'primer_nombreaco' => ['nullable'],
            'segundo_nombreaco'  => ['nullable'],
            'primer_apellidoaco' => ['nullable'],
            'segundo_apellidoaco'  => ['nullable'],
            'documentoaco' => ['nullable'],
            'userd_doc'=> ['required'],
            'userr_doc' => ['required'],
            'sis_nnaj_id' => ['nullable'],
            'area_id'=> ['required'],
            'justificacion' => ['nullable'],
            'seguimiento_id'=> ['required'],

           
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
        // $this->_reglasx['nombre'][3]='unique:temas,nombre,'.$this->segments()[3];
    }
}
