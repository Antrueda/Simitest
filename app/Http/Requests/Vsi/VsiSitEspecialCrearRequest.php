<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiSitEspecialCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_victima_id.required_if' => 'Indique si existe reconocimiento por parte del NNA como víctima',
            'victimas.required' => 'Indique si es víctima',
            'riesgos.required_if' => 'Indique si se encuentra en riesgo',
        ];
        $this->_reglasx = [
            'victimas'       => 'required|array',
            'riesgos'        => 'required_if:victimas,853|array',
            'prm_victima_id' => 'nullable:|exists:parametros,id',
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
