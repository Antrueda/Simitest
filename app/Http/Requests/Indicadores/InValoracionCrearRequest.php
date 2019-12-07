<?php

namespace App\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InValoracionCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_valoracion.required' => 'Ingrese la valoración',
            'i_prm_categoria_id.required' => 'Seleccione una categoría',
            'i_prm_avance_id.required' => 'Seleccione el nivel de avance',
            
            
        ];
        $this->_reglasx = [
            's_valoracion' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'i_prm_categoria_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'i_prm_avance_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            
            

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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario

    }
}
