<?php

namespace App\Http\Requests\DireccionamientoAdmin;

use Illuminate\Foundation\Http\FormRequest;

class EntidadAsignarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
       
        $this->_mensaje = [
            'sis_entidad_id.required' => 'Seleccione un Entidad',
            'sis_servicio_id.required' => 'Seleccione un Servicio',
            

        ];
        $this->_reglasx = [
        'sis_entidad_id' => ['required'],
        'sis_servicio_id' => ['required'],

        ];
    }
    //fos_stses_id
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
