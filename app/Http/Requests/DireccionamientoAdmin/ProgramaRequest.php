<?php

namespace app\Http\Requests\DireccionamientoAdmin;

use Illuminate\Foundation\Http\FormRequest;

class ProgramaRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {


       
        $this->_mensaje = [
            's_servicio.required' => 'El nombre es requerido',
            's_servicio.unique' => 'El nombre ya existe',
            's_servicio.max' => 'El nombre debe tener un máximo de 120 caracteres',
           
        ];
        $this->_reglasx = [
             's_servicio' => ['Required','string','max:120','unique:sis_servicios'],

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
