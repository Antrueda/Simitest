<?php

namespace App\Http\Requests;

use App\Models\Logs\HUser;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'password.min' => 'La  contraseña debe tener al menos 8 caracteres',
            'password_confirmation.min' => 'La confirmación de la contraseña debe tener al menos 8 caracteres',
            'password.regex' => 'La contraseña debe tener por lo menos un letra en (MAYUSCULA), una en (minuscula), un número y un carecter especial que puede ser alguno de los siguientes (!$#%*)',
        ];
        $this->_reglasx = [
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%*]).*$/',
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
        $usadaxxx = false;
        $usuariox = Auth::user();
        if (Hash::check($this->password, $usuariox->password)) {
            $usadaxxx = true;
        }
        foreach (HUser::where('id_old', $usuariox->id)->get() as $key => $value) {
            if (Hash::check($this->password, $value->password)) {
                $usadaxxx = true;
            }
        }
        if ($usadaxxx) {
            $this->_mensaje['repetido.required'] = 'La contraseña ya ha sido utilizada';
            $this->_reglasx['repetido'] = ['required'];
        }
    }
}
