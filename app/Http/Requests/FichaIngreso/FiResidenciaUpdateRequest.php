<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiResidenciaUpdateRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_tiene_dormir_id.required' => 'Seleccione lugar donde dormir',
            'i_prm_tipo_duerme_id.required' => 'Seleccione tipo de residencia o lugar donde duerme',
            'i_prm_tipo_tenencia_id.required' => 'Seleccione tenencia',
            'i_prm_tipo_direccion_id.required' => 'Seleccione tipo de dirección de la residencia',
            'i_prm_zona_direccion_id.required' => 'Seleccione zona de la residencia',
            'i_prm_estrato_id.required' => 'Seleccione estrato de la residencia donde duerme',
            'i_prm_espacio_parcha_id.required' => 'Seleccione lugar donde parcha',
            'sis_upz_id.required' => 'Seleccione una UPZ',
            'sis_upzbarri_id.required' => 'Seleccione un barrio',
            'i_prm_condicion_amb_id.required' => 'Seleccione las condiciones del ambiente',
        ];
        $this->_reglasx = [
            'i_prm_tiene_dormir_id' => ['Required'],
            'i_prm_tipo_duerme_id' => ['Required'],
            'i_prm_tipo_tenencia_id' => ['Required'],
            'i_prm_tipo_direccion_id' => ['Required'],
            'i_prm_zona_direccion_id' => ['Required'],
            'i_prm_estrato_id' => ['Required'],
            'i_prm_espacio_parcha_id' => ['Required'],
            'i_prm_condicion_amb_id' => ['Required'],
            'sis_upzbarri_id' => ['Required'],
            'sis_upz_id' => ['Required'],
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
        $datobasi=FiDatosBasico::find($this->segments()[1]);
        switch($this->i_prm_zona_direccion_id){
            case 287:
            $this->_mensaje['i_prm_tipo_via_id.required'] = 'Seleccione tipo de via de la residencia';
            $this->_mensaje['s_nombre_via.required'] = 'Seleccione numero/nombre vía principal';
            $this->_mensaje['i_via_generadora.required'] = 'Seleccione número via generadora';
            $this->_mensaje['i_placa_vg.required'] = 'Seleccione placa vg';
            $this->_reglasx['i_prm_tipo_via_id']='Required';
            $this->_reglasx['s_nombre_via']='Required';
            $this->_reglasx['i_via_generadora']='Required';
            $this->_reglasx['i_placa_vg']='Required';
            break;
            case 288:
            case 289:
            $this->_mensaje['s_complemento.required'] = 'Seleccione complemento';
            $this->_reglasx['s_complemento']='Required';
            break;
        }
        if($datobasi->prm_tipoblaci_id != 650){
            $this->_mensaje['s_telefono_uno.required'] = 'Digite el campo Teléfono 1';
            $this->_reglasx['s_telefono_uno']='Required';
            $this->_mensaje['sis_upzbarri_id.required'] = 'Seleccione el barrio';
            $this->_reglasx['sis_upzbarri_id']='Required';
        }
    }
}
