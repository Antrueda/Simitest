<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiActEmocionalEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'descripcion.required_if' => 'Ingrese una descripción',
            'conductual.required_if' => 'Ingrese una descripción de activación conductual',
            'cognitiva.required_if' => 'Ingrese una descripción de activación cognitiva',
            'fisiologicas.required_if' => 'Seleccione que activaciones fisiologicas genera',
            'prm_activa_id.required' => 'Seleccione alguna actividad',
        ];
        $this->_reglasx = [
            'prm_activa_id' => 'required|exists:parametros,id',
            'descripcion' => 'required_if:prm_activa_id,227|max:4000',
            'conductual' => 'required_if:prm_activa_id,227|max:4000',
            'cognitiva' => 'required_if:prm_activa_id,227|max:4000',
            'fisiologicas' => 'required_if:prm_activa_id,227|array',
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
