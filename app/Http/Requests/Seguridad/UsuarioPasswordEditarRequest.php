<?php

namespace App\Http\Requests\Seguridad;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioPasswordEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        // Mensajes para las validaciones para users
        $this->_mensaje['passwordd.required'] = 'Ingrese una contraseña';
       
        $this->_mensaje['passwordd.same'] = 'Las contraseñas deben ser iguales';
        $this->_mensaje['passwordd.min'] = 'La contraseña debe tener al menos 6 dígitos';

        $this->_mensaje['password_confirmation.required'] = 'Ingrese una contraseña de confirmación';
       
       $this->_mensaje['password_confirmation.min'] = 'La contraseña de confirmación debe tener al menos 6 dígitos';
      
        $this->_reglasx['passwordd'] = [
            'required',
            'min:6',
            
            'same:password_confirmation',
        ];
        $this->_reglasx['password_confirmation'] = [
            'required',
            'min:6',
            
        ];

        //"required|array|min:3",
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        
    }
}
