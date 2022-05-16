<?php

namespace App\Http\Requests\Administracion\Temas;


use Illuminate\Foundation\Http\FormRequest;

class ParametroEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombre.required' => 'El nombre del tema es requerido',
            'nombre.unique' => 'El nombre del tema ya se encuentra en uso',
        ];
        $this->_reglasx = [
            'nombre' =>
            [
                'required',
                'string',
                'max:300',

            ]

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
        $this->_reglasx['nombre'][3]='unique:parametros,nombre,'.$this->segments()[3];
    }
}
