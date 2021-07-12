<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiSaludCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'descripcion.required_if' => 'Ingrese una descripción',
            'medicamento.required_if' => 'Indique cual un medicamento',
            'prm_prescripcion_id.required_if' => 'Indique si ha tomado el medicamento bajo prescripcion medica',
            'prm_atencion_id.required' => 'Seleccione si ha recibido un tipo de atención psicológica y/o psiquiatría',
            'prm_medicamento_id.required' => 'Indique si le han ordenado algun medicamentoo psiquiátrico',
            'prm_sexual_id.required' => 'Indique si ha iniciado su vida sexual',
            'prm_embarazo_id.required_if' => 'Indique si ha  tenido embarazos',
            'prm_interrupcion_id.required_if' => 'Indique si ha presentado alguna interrupción del embarazo medica',
            'prm_condicion_id.required_if' => 'Indique por cual condición',
            
            
        ];
        $this->_reglasx = [
            'prm_atencion_id' => 'required|exists:parametros,id',
            'prm_condicion_id' => 'required_if:prm_atencion_id,227',
            'prm_medicamento_id' => 'required|exists:parametros,id',
            'prm_prescripcion_id' => 'required_if:prm_medicamento_id,227',
            'prm_sexual_id' => 'required|exists:parametros,id',
            'prm_activa_id' => 'required_if:prm_sexual_id,227',
            'prm_embarazo_id' => 'required_if:prm_sexual_id,227',
            'prm_hijo_id' => 'required_if:prm_sexual_id,227',
            'prm_interrupcion_id' => 'required_if:prm_sexual_id,227',
            'medicamento' => 'required_if:prm_medicamento_id,227|max:120',
            'descripcion' => 'required_if:prm_medicamento_id,227|max:4000',
            'edad' => 'required_if:prm_sexual_id,227|max:99',
            'embarazo' => 'required_if:prm_embarazo_id,227|max:99',
            'hijo' => 'required_if:prm_hijo_id,227|max:99',
            'interrupcion' => 'required_if:prm_interrupcion_id,227|max:99',
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
