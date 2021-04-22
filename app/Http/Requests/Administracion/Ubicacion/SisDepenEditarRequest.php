<?php

namespace App\Http\Requests\Administracion\Ubicacion;


use Illuminate\Foundation\Http\FormRequest;

class SisDepenEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombre.required' => 'El nombre de la localidad es requerido',
            'nombre.unique' => 'El nombre de la localidad ya se encuentra en uso',
            'simianti_id.required'=>'El código antiguo es requerido'
        ];
        $this->_reglasx = [
            'nombre' =>
            [
                'required',
                'string',
                'max:120',
                'unique:sis_depens'
            ],
            'simianti_id'=>['required']

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
        $this->_reglasx['nombre'][3]='unique:sis_depens,nombre,'.$this->segments()[2];
    }
}
