<?php

namespace App\Http\Requests\Actaencu;


use Illuminate\Foundation\Http\FormRequest;

class AeContactoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombres_apellidos.required' => 'Debe diligenciar los nombres y apellidos.',
            'sis_entidad_id.required'    => 'Debe diligenciar la entidad.',
            'cargo.required'             => 'Debe diligenciar el cargo.',
            'phone.required'             => 'Debe diligenciar el teléfono.',
            'email.required'             => 'Debe diligenciar el correo electrónico.',
            'email.regex'                => 'El fomato del correo es incorrecto.',
        ];
        $this->_reglasx = [
            'nombres_apellidos' => ['required', 'string'],
            'sis_entidad_id'    => ['required', 'exists:sis_entidads,id'],
            'cargo'             => ['required', 'string'],
            'phone'             => ['required', 'numeric', 'digits_between:7,10'],
            'email'             => [
                'required', 'email', 'string',
                'regex:/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/'
            ],
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
