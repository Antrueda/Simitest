<?php

namespace app\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiRedApoyoActualUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_servicio.required' => 'Escriba el servicio recibido',
            'i_prm_tipo_red_id.required' => 'Seleccione un tipo de red',
            's_nombre_persona.required' => 'Ingrese el nombre de la persona',
            's_telefono.required' => 'Ingrese un número de teléfono',
            's_direccion.required' => 'Ingrese una dirección'
        ];
        $this->_reglasx = [
            's_servicio' => ['required'],
            'i_prm_tipo_red_id' => ['required'],
            's_nombre_persona' => ['required'],

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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
