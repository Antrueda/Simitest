<?php

namespace App\Http\Requests\FichaObservacion;

use Illuminate\Foundation\Http\FormRequest;

class FosStseCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {


       
        $this->_mensaje = [
            'nombre.required' => 'El nombre es requerido',
            
            'nombre.unique' => 'El nombre ya existe',
            'nombre.max' => 'El nombre debe tener un máximo de 120 caracteres',
            'nombre.max' => 'La descripción debe tener un máximo de 4000 caracteres',
            'estusuario_id.required'=> 'Seleccione la justificación de estado',
        ];
        $this->_reglasx = [
             'nombre' => ['Required','string','max:120','unique:fos_stses'],
            'descripcion' => ['nullable','max:4000'],
            'estusuario_id' => ['Required'],
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
