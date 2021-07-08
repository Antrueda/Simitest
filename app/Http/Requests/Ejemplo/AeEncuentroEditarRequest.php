<?php

namespace app\Http\Requests\Ejemplo;


use Illuminate\Foundation\Http\FormRequest;

class AeEncuentroEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            // 'nombre_campo.regla' => 'mensaje',
        ];
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
