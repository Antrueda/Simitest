<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiDinfamMadreCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_convive_id.required' => 'Seleccione si convive',
            'prm_separa_id.required' => 'Seleccione motivo de la separacion',
        ];
        $this->_reglasx = [
            'prm_convive_id' => 'required|exists:parametros,id',
            'dia' => 'nullable|integer|min:0|max:99',
            'mes' => 'nullable|integer|min:0|max:99',
            'ano' => 'nullable|integer|min:0|max:99',
            'hijo' => 'nullable|integer|min:0|max:99',
            'prm_separa_id' => 'nullable|exists:parametros,id',
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
