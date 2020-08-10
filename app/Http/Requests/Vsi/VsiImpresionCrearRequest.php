<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiImpresionCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [

        ];
        $this->_reglasx = [
            'concepto' => 'required|string|max:4000',
            'prm_ingreso_id' => 'nullable|exists:parametros,id',
            'porque' => 'nullable|string|max:4000',
            'cual' => 'nullable|string|max:120',
            'redes' => 'nullable|array'
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
