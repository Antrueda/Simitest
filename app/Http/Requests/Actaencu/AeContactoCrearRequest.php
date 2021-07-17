<?php

namespace app\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeContactoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombres_apellidos' => 'Debe diligenciar la fecha de diligenciamiento.',
            'sis_entidad_id'    => 'Debe diligenciar la fecha de diligenciamiento.',
            'cargo'             => 'Debe diligenciar la fecha de diligenciamiento.',
            'phone'             => 'Debe diligenciar la fecha de diligenciamiento.',
            'email'             => 'Debe diligenciar la fecha de diligenciamiento.',
        ];
        $this->_reglasx = [
            'nombres_apellidos' => ['required', 'string'],
            'sis_entidad_id'    => ['required', 'exists:sis_entidads,id'],
            'cargo'             => ['required', 'string'],
            'phone'             => ['required', 'integer', 'max:10', 'min:7'],
            'email'             => ['required', 'email', 'string'],
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
