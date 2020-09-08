<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiVcontviolCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_violenci_id.required' => 'Seleccione seleccione un tipo de violencia',
            'prm_contexto_id.required' => 'Seleccione un contexto',
            'prm_respuest_id.required' => 'Seleccione una respuesta',
        ];
        $this->_reglasx = [
            'prm_violenci_id' => ['Required'],
            'prm_contexto_id' => ['Required'],
            'prm_respuest_id' => ['Required'],     
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
        
    }
}
