<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiBienvenidaCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'i_prm_quiere_entrar_id.required' => 'Seleccione quiere entrar al idipron',
            's_porque_quiere_entrar.required' => 'Seleccione porqué quiere entrar',
            's_que_gustaria_hacer.required' => 'Seleccione qué te gustaría hacer en el idipron',
            
        ];
        $this->_reglasx = [
            'i_prm_quiere_entrar_id' => ['Required'],
            's_porque_quiere_entrar' => ['Required'],
            's_que_gustaria_hacer' => ['Required'],
            
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario

    }
}
