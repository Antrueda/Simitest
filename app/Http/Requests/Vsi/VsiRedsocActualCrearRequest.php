<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiRedsocActualCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_tipo_id.required' => 'Seleccione un tipo',
            'nombre.required' => 'Ingrese el nombre',
        ];
        $this->_reglasx = [
            'prm_tipo_id' => 'required|exists:parametros,id',
            'nombre' => 'required|string|max:120',
            'servicio' => 'required|string|max:4000',
            'telefono' => 'nullable|string|max:120',
            'direccion' => 'nullable|string|max:120',
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
