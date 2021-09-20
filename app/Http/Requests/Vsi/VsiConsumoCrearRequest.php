<?php

namespace app\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiConsumoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_consumo_id.required' => 'Seleccione si consume',
            'cantidad.required_if' => 'Indique la cantidad',
            'inicio.required_if' => 'En que edad inicio',
            'prm_contexto_ini_id.required_if' => 'Seleccione en que contexto se dio inicio al consumo',
            'prm_consume_id.required_if' => '¿Consume SPA?',
            'prm_contexto_man_id.required_if' => 'Indique en que contexto mantiene el consumo',
            'prm_problema_id.required_if' => 'Indique si considera problematico el consumo de sustancias',
            'porque.required_if' => 'Digete el por qué',
            'prm_motivo_id.required_if' => 'Seleccione el motivo por el cual considera el consumo de SPA',
            'expectativas.required_if' => '¿Que expectativas tiene frente al consumo de SPA?',
            'prm_familia_id.required' => 'Indique si algún miembro de su familia consume SPA',
            'descripcion.required_if' => 'Digite una descripción',
            'quienes.required_if' => 'Indique quienes consumen SPA',
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
