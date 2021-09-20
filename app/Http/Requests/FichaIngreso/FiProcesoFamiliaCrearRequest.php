<?php

namespace app\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiProcesoFamiliaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'fi_compfami_id.required' => 'Seleccione un miembro de la familia',
            's_proceso.required' => 'Indique el proceso',
            'i_prm_vigente_id.required' => 'Seleccione si está vigente',
            'i_numero_veces.required' => 'Indique el número de veces',
            's_motivo.required' => 'Escriba el motivo',
            'i_hace_cuanto.required' => 'Indique hace cuanto está abierto el proceso',
            'i_prm_tipo_tiempo_id.required' => 'Seleccione el tipo de tiempo',
        ];
        $this->_reglasx = [
            'fi_compfami_id' => ['required'],
            's_proceso' => ['required'],
            'i_prm_vigente_id' => ['required'],
            'i_numero_veces' => ['required'],
            's_motivo' => ['required'],
            'i_hace_cuanto' => ['required'],
            'i_prm_tipo_tiempo_id' => ['required'],
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
