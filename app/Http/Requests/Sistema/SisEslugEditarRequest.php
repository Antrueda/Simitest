<?php

namespace app\Http\Requests\Sistema;

use app\Models\Indicadores\InDocIndi;
use Illuminate\Foundation\Http\FormRequest;
class SisEslugEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_espaluga.required' => 'Ingrese el nombre del rol',
            's_espaluga.unique' => 'el rol ya se encuentra en uso',
            'estusuario_id.required' => 'Ingrese una justificación de estado',      
            'sis_esta_id.required' => 'Seleccione un estado',  
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
        $this->_reglasx = [
            's_espaluga' => ['required','unique:sis_eslugs,s_espaluga,' . $this->segments()[2]],
            'estusuario_id' =>
            [
                'required',
            ],
            'sis_esta_id'=>
            [
                'required',
            ],
        ];
      
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        // unico para relacion multiple
    }
}
