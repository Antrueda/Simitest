<?php

namespace App\Http\Requests\DireccionamientoAdmin;

use Illuminate\Foundation\Http\FormRequest;

class EntidadRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {


       
        $this->_mensaje = [
            'nombre.required' => 'El nombre es requerido',
            'sis_esta_id.required' => 'Seleccione un estado',
            'nombre.unique' => 'El nombre ya existe',
            'nombre.max' => 'El nombre debe tener un máximo de 120 caracteres',
           
        ];
        $this->_reglasx = [
             'nombre' => ['Required','string','max:120','unique:sis_entidads'],
             'sis_esta_id' => ['Required'],

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
