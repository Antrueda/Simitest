<?php

namespace app\Http\Requests\Administracion\Temas;


use Illuminate\Foundation\Http\FormRequest;

class TemaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'nombre.required'=>'El nombre del tema es requerido',
          ];
        $this->_reglasx = [
            'nombre' => 'required|string|max:120|unique:temas',
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
        return $this->_reglasx;    }

        public function validar()
        {

        }
}
