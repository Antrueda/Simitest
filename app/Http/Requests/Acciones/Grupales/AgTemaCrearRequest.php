<?php

namespace App\Http\Requests\Acciones\Grupales;

use Illuminate\Foundation\Http\FormRequest;

class AgTemaCrearRequest extends FormRequest
{
    
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_tema.required' => 'Ingrese el nombre del rol',
            'area_id.required' => 'Ingrese el nombre del rol',            
            'estusuario_id.required' => 'Ingrese el nombre del rol',            
        ];
        $this->_reglasx = [
            's_tema' =>['required'],
            'area_id' =>['required'],
            'estusuario_id' =>['required'],
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
        /*$dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        if (!isset($dataxxxx['permissions'])) {
            $this->_mensaje['permissions.required'] = 'Seleccione al menos un permios';
            $this->_reglasx['permissions'] = 'required';
        }*/
    }
}
