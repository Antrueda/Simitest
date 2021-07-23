<?php

namespace app\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeAsistencEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'i_prm_tipo_via_id.required'        => 'Debe diligenciar el tipo de via principal.',
            // 's_complemento.required'            => 'Debe diligenciar el nombre de a via principal.',
            's_nombre_via.required'             => 'Debe diligenciar el nombre/numero de la via princial.',
            'i_prm_alfabeto_via_id.required'    => 'Debe diligenciar el alfabeto de la via principal.',
            // 'i_prm_tiene_bis_id.required'       => 'Debe diligenciar si la via principal tiene bis.',
            // 'i_prm_bis_alfabeto_id.required'    => 'Debe diligenciar la letra bis.',
            // 'i_prm_cuadrante_vp_id.required'    => 'Debe diligenciar el cuadrante de la via principal.',
            'i_via_generadora.required'         => 'Debe diligenciar el numero de la via generadora.',
            // 'i_prm_alfabetico_vg_id.required'   => 'Debe diligenciar el alfabeto de la via generadora.',
            'i_placa_vg.required'               => 'Debe diligenciar el placa de la via generadora.',
            // 'i_prm_cuadrante_vg_id.required'    => 'Debe diligenciar el cuadrante de la via generadora.',
            'user_funcontr_id.required'         => 'Debe diligenciar el funcionario o contratista que aprueba.',
            'respoupi_id.required'              => 'Debe diligenciar el responsable de la upi que aprueba.',
        ];
        $this->_reglasx = [
            'i_prm_tipo_via_id'         => ['required', 'exists:parametros,id'],
            // 's_complemento'             => ['required', 'exists:sis_entidads,id'],
            's_nombre_via'              => ['required', 'numeric', 'min:1', 'max:250'],
            'i_prm_alfabeto_via_id'     => ['required', 'numeric', 'digits_between:7,10'],
            // 'i_prm_tiene_bis_id'        => ['required', 'email', 'string'],
            // 'i_prm_bis_alfabeto_id'     => ['required', 'email', 'string'],
            // 'i_prm_cuadrante_vp_id'     => ['required', 'email', 'string'],
            'i_via_generadora'          => ['required', 'numeric', 'min:1', 'max:250'],
            // 'i_prm_alfabetico_vg_id'    => ['required', 'email', 'string'],
            'i_placa_vg'                => ['required', 'numeric', 'min:1', 'max:250'],
            // 'i_prm_cuadrante_vg_id'     => ['required', 'email', 'string'],
            'user_funcontr_id'          => ['required', 'exists:users,id'],
            'respoupi_id'               => ['required', 'exists:users,id'],
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
