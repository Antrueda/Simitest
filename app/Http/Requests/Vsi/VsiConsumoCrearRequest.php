<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiConsumoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_consumo_id.required_if' => 'Seleccione si consume',
        ];
        $this->_reglasx = [
            'prm_consumo_id' => 'required|exists:parametros,id',
            'cantidad' => 'required_if:prm_consumo_id,227',
            'inicio' => 'required_if:prm_consumo_id,227',
            'prm_contexto_ini_id' => 'required_if:prm_consumo_id,227',
            'prm_consume_id' => 'required_if:prm_consumo_id,227',
            'prm_contexto_man_id' => 'required_if:prm_consume_id,227',
            'prm_problema_id' => 'required_if:prm_consume_id,227',
            'porque' => 'required_if:prm_consume_id,227',
            'prm_motivo_id' => 'required_if:prm_consume_id,227',
            'expectativas' => 'required_if:prm_consume_id,227',
            'prm_familia_id' => 'required|exists:parametros,id',
            'descripcion' => 'required_if:prm_consumo_id,227|required_if:prm_familia_id,227|max:4000',
            'quienes' => 'required_if:prm_familia_id,227',
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
