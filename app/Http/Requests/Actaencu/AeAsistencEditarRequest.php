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
            'i_prm_tipo_via_id.required'        => 'Debe diligenciar el tipo de vía principal.',
            's_nombre_via.required'             => 'Debe diligenciar el nombre/número de la vía principal.',
            'i_via_generadora.required'         => 'Debe diligenciar el número de la vía generadora.',
            'i_placa_vg.required'               => 'Debe diligenciar el placa de la vía generadora.',
            'user_funcontr_id.required'         => 'Debe diligenciar el funcionario(a) o contratista que aprueba.',
            'respoupi_id.required'              => 'Debe diligenciar el responsable de la UPI que aprueba.',
        ];
        $this->_reglasx = [
            'i_prm_tipo_via_id'         => ['required', 'exists:parametros,id'],
            's_nombre_via'              => ['required', 'numeric', 'min:1', 'max:250'],
            'i_via_generadora'          => ['required', 'numeric', 'min:1', 'max:250'],
            'i_placa_vg'                => ['required', 'numeric', 'min:1', 'max:250'],
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
