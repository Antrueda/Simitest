<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiViolenciaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_tip_vio_id.required' => 'Indique si se presenta algun tipo de violencia',
            
            'prm_dis_gen_id.required_if' => 'Campo obligatorio',
            'prm_dis_ori_id.required_if' => 'Campo obligatorio',
            'contextos.required_if' => 'Seleccione un contexto',
            'tipos.required_if' => 'Seleccione un tipo de violencia',
        ];
        $this->_reglasx = [
            'prm_tip_vio_id'    => 'required|exists:parametros,id',
            'prm_dis_gen_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_dis_ori_id'    => 'required_if:prm_tip_vio_id,227',
            'contextos' => 'required_if:prm_dis_gen_id,227|array',
            'tipos' => 'required_if:prm_dis_ori_id,227|array',
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

    }
}
