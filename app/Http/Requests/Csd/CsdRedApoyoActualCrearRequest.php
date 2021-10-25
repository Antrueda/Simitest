<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdRedApoyoActualCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required' => 'Escriba el servicio recibido',
            'prm_tipo_id.required' => 'Seleccione un tipo de red',
            'nombre.required' => 'Ingrese el nombre de la persona',
            'telefono.required' => 'Ingrese un número de teléfono',
            'direccion.required' => 'Ingrese una dirección'
        ];
        $this->_reglasx = [
            'prm_tipo_id' => 'required|exists:parametros,id',
            'nombre'      => 'required|string|max:120',
            'telefono'    => 'nullable|string|max:120',
            'direccion'   => 'nullable|string|max:120',
            'servicios'   => 'required|string|max:120',
      
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
