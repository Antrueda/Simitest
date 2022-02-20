<?php

namespace App\Http\Requests\AsisDiar;


use Illuminate\Foundation\Http\FormRequest;

class AsisDiarCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        // Todo: Colocar los mensajes
        $this->_mensaje = [
            // 'nombre_campo.regla' => 'mensaje',
        ];

        // Todo: Colocar las validaciones
        $this->_reglasx = [
            // 'nombre_campo' =>
            // [
            //     'regla1',
            //     'regla2',
            // ]
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
