<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiRedsocPasadoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'ano_prestacion.required' => 'Seleccione el año de prestación del servicio',
            'nombre.required' => 'ingrese el nombre',
        ];
        $this->_reglasx = [
            'nombre' => 'required|string|max:120',
            'servicio' => 'required|string|max:120',
            'dia' => 'nullable|integer|min:0|max:99',
            'mes' => 'nullable|integer|min:0|max:99',
            'ano' => 'nullable|integer|min:0|max:99',
            'ano_prestacion' => 'required|integer|min:2000|max:2030',
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
