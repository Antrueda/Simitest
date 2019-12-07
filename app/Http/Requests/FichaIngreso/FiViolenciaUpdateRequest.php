<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiViolenciaUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    
    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_presenta_violencia_id.required' => 'Seleccione presenta algún tipo de violencia',
            'i_prm_familiar_fisica_id.required' => 'Seleccione familiar fisica',
            'i_prm_amistad_fisica_id.required' => 'Seleccione amistad fisica',
            'i_prm_pareja_fisica_id.required' => 'Seleccione pareja fisica',
            'i_prm_comunidad_fisica_id.required' => 'Seleccione comunidad fisica',
            'i_prm_familiar_psico_id.required' => 'Seleccione familiar psicologica',
            'i_prm_amistad_psico_id.required' => 'Seleccione amistad psicologica',
            'i_prm_pareja_psico_id.required' => 'Seleccione pareja psicologica',
            'i_prm_comunidad_psico_id.required' => 'Seleccione comunidad psicologica',
            'i_prm_familiar_sexual_id.required' => 'Seleccione familiar sexual',
            'i_prm_amistad_sexual_id.required' => 'Seleccione amistad sexual',
            'i_prm_pareja_sexual_id.required' => 'Seleccione pareja sexual',
            'i_prm_comunidad_sexual_id.required' => 'Seleccione comunidad sexual',
            'i_prm_familiar_econo_id.required' => 'Seleccione familiar economica',
            'i_prm_amistad_econo_id.required' => 'Seleccione amistad sexual economica',
            'i_prm_pareja_econo_id.required' => 'Seleccione pareja sexual economica',
            'i_prm_comunidad_econo_id.required' => 'Seleccione comunidad sexual economica',
            'i_prm_violencia_genero_id.required' => 'Seleccione el tipo de violencia referenciado corresponde a violencia basada en género/identidad de género',
            'i_prm_condicion_presenta_id.required' => 'Seleccione condición especial presenta',
            'i_prm_depto_condicion_id.required' => 'Seleccione departamento condicion especial',
            'i_prm_municipio_condicion_id.required' => 'Seleccione municipio condicion especial',
            'i_prm_tiene_certificado_id.required' => 'Seleccione cuenta con certificado',
            'i_prm_depto_certifica_id.required' => 'Seleccione departamento certifica condicion especial',
            'i_prm_municipio_certifica_id.required' => 'Seleccione municipio certifica condicion especial',
        ];
        $this->_reglasx = [
            'i_prm_presenta_violencia_id' => ['Required'],
            'i_prm_familiar_fisica_id' => ['Required'],
            'i_prm_amistad_fisica_id' => ['Required'],
            'i_prm_pareja_fisica_id' => ['Required'],
            'i_prm_comunidad_fisica_id' => ['Required'],
            'i_prm_familiar_psico_id' => ['Required'],
            'i_prm_amistad_psico_id' => ['Required'],
            'i_prm_pareja_psico_id' => ['Required'],
            'i_prm_comunidad_psico_id' => ['Required'],
            'i_prm_familiar_sexual_id' => ['Required'],
            'i_prm_amistad_sexual_id' => ['Required'],
            'i_prm_pareja_sexual_id' => ['Required'],
            'i_prm_comunidad_sexual_id' => ['Required'],
            'i_prm_familiar_econo_id' => ['Required'],
            'i_prm_amistad_econo_id' => ['Required'],
            'i_prm_pareja_econo_id' => ['Required'],
            'i_prm_comunidad_econo_id' => ['Required'],
            'i_prm_violencia_genero_id' => ['Required'],
            'i_prm_condicion_presenta_id' => ['Required'],
            'i_prm_depto_condicion_id' => ['Required'],
            'i_prm_municipio_condicion_id' => ['Required'],
            'i_prm_tiene_certificado_id' => ['Required'],
            'i_prm_depto_certifica_id' => ['Required'],
            'i_prm_municipio_certifica_id' => ['Required'],
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