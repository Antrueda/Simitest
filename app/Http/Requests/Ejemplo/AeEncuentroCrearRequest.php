<?php

namespace App\Http\Requests\Ejemplo;


use Illuminate\Foundation\Http\FormRequest;

class AeEncuentroCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            // 'nombre_campo.regla' => 'mensaje',
        ];
        $this->_reglasx = [
            'actividades'=> ['required'],
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
