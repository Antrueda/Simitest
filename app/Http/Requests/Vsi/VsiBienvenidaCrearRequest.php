<?php

namespace app\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiRelSocialesCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'descripcion.required' => 'Ingrese una descripción',
            'prm_dificultad_id.required' => 'Seleccione una dificultad',
        ];
        $this->_reglasx = [
            'descripcion' => 'required|string|max:4000',
            'prm_dificultad_id' => 'nullable|exists:parametros,id',
            'completa' => 'nullable|string|max:4000',
            'facilitas' => 'required|array',
            'dificultades' => 'required|array',
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
