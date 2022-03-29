<?php

namespace App\Http\Requests\AsisSema;


use Illuminate\Foundation\Http\FormRequest;

class AsisSemaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
         // Todo: Colocar los mensajes
         $this->_mensaje = [
            'h_inicio.required'=>'Seleccione hora de inicio',
            'h_final.required'=>'Seleccione hora final',
        ];

        // Todo: Colocar las validaciones
        $this->_reglasx = [
            'h_inicio'=>'required',
            'h_final'=>'required',
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
        // $this->_reglasx['nombre'][3]='unique:temas,nombre,'.$this->segments()[3];
    }
}
