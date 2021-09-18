<?php

namespace app\Http\Requests\Sistema;

use Illuminate\Foundation\Http\FormRequest;
class SisServicioEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_servicio.required' => 'Ingrese el nombre del servicio',
            's_servicio.unique' => 'El servicio ya se encuentra en uso',
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
        $this->_reglasx['s_servicio']= ['required',
            'unique:sis_servicios,s_servicio,' . $this->segments()[2]];
        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
