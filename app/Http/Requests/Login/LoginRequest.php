<?php

namespace app\Http\Requests\Login;

use app\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_documento.required' => 'Ingrese su numero de documento',
            'password.required' => 'Ingrese su contraseña',
        ];
        $this->_reglasx = [
            's_documento' => ['required', 'string'],
            'password' => ['required', 'string'],
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
        $usuario = User::where('s_documento', $this->s_documento)->first();
        if (isset($usuario->id)) {
            if ($usuario->sis_esta_id == 2) {
                $this->_reglasx['inactivo'] =  ['required'];
                $this->_mensaje['inactivo.required'] ='No tienen acceso al sistema por fecha de terminación de contrato. Comunicarse con los administradores';
            }
        }
    }
}
