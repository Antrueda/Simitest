<?php

namespace App\Http\Requests;

use App\Rules\ValidaPassword;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'password.min' => 'La  contraseña debe tener al menos 8 carracteres',
            'password_confirmation.min' => 'La confirmación de la contraseña debe tener al menos 8 carracteres',
        ];
        $this->_reglasx = [
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            'password_confirmation' => ['min:8']
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
        $dataxxxx = $this->segments(); // todo lo que se envia del formulario
    }
}
