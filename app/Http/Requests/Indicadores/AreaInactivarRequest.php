<?php

namespace App\Http\Requests\Indicadores;


use Illuminate\Foundation\Http\FormRequest;

class AreaInactivarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'estusuario_id.required' => 'Seleccione una justificación',
        ];
        $this->_reglasx = [
            'estusuario_id' => ['required'],
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
        $this->_reglasx['estusuario_id'] = [
            'required',
        ];
        return $this->_reglasx;
    }

    public function validar()
    {
    }
}
