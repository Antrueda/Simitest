<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiRedSocialEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_presenta_id.required' => 'Seleccione un motivo',
            'prm_dificultad_id.required' => 'Seleccione una dificultad',
            'prm_quien_id.required_if' => 'Seleccione quien',
            'prm_ruptura_genero_id.required' => 'Indique si existe la ruptura de redes de apoyo por exteorización de su identidad de género',
            'prm_ruptura_sexual_id.required' => 'Indique si existe la ruptura de redes de apoyo por exteorización de su orientación sexual',
            'prm_acceso_id.required' => 'Indique si ha existido restricción para el acceso a espacios, servicios o redes de apoyo',
            'prm_servicio_id.required' => 'Indique si recibio servicios de alguna red',
            'motivos.required_if' => 'Ingrese los motivos',
            'accesos.required_if' => 'Ingrese los motivos de restricción de acceso',
        ];
        $this->_reglasx = [
            'prm_presenta_id' => 'required|exists:parametros,id',
            
            'prm_dificultad_id' => 'required|exists:parametros,id',
            'prm_quien_id' => 'required_if:prm_dificultad_id,227',
            'prm_ruptura_genero_id' => 'required|exists:parametros,id',
            'prm_ruptura_sexual_id' => 'required|exists:parametros,id',
            'prm_acceso_id' => 'required|exists:parametros,id',
            'prm_servicio_id' => 'required|exists:parametros,id',
            'motivos' => 'required_if:prm_dificultad_id,227|array',
            'accesos' => 'required_if:prm_acceso_id,227|array',
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
        if($this->prm_presenta_id==227){
            $this->_mensaje['prm_protector_id.required']='Seleccione un motivo';
            $this->_reglasx['prm_protector_id']='required_if:prm_presenta_id,227|exists:parametros,id'; 
        }
    }
}
