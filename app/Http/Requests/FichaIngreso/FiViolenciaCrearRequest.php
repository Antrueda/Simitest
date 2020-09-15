<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiViolenciaCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'i_prm_presenta_violencia_id.required' => 'Seleccione presenta algún tipo de violencia',


            'i_prm_condicion_presenta_id.required' => 'Seleccione condición especial presenta',
            'i_prm_depto_condicion_id.required' => 'Seleccione departamento condicion especial',
            'i_prm_municipio_condicion_id.required' => 'Seleccione municipio condicion especial',
            'i_prm_tiene_certificado_id.required' => 'Seleccione cuenta con certificado',
            'i_prm_depto_certifica_id.required' => 'Seleccione departamento certifica condicion especial',
            'i_prm_municipio_certifica_id.required' => 'Seleccione municipio certifica condicion especial',
        ];
        $this->_reglasx = [
            'i_prm_presenta_violencia_id' => ['Required'],

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
        $datosbas=FiDatosBasico::find($this->segments()[1]);
        if($datosbas->prm_estrateg_id!=2323){
            $this->_mensaje['i_prm_violencia_genero_id.required']= 'Seleccione el tipo de violencia referenciado corresponde a violencia basada en género/identidad de género';
            $this->_reglasx['i_prm_violencia_genero_id']= ['Required'];
        }
        if($datosbas->prm_estrateg_id==2323){
            $this->_mensaje['prm_violbasa_id.required']= 'Seleccione el tipo de violencia referenciado corresponde a violencia basada en:';
            $this->_reglasx['prm_violbasa_id']= ['Required','array'];
            $this->_mensaje['prm_lesicome_id.required']= 'Seleccione que tipo de presuntas lesiones ha cometido durante la actividad';
            $this->_reglasx['prm_lesicome_id']= ['Required','array'];
            $this->_mensaje['prm_cabefami_id.required']= 'Seleccione si es cabeza de familia';
            $this->_reglasx['prm_cabefami_id']= ['Required'];

        }

    }
}
