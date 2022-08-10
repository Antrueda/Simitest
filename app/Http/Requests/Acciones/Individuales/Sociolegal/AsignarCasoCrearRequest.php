<?php

namespace App\Http\Requests\Acciones\Individuales\Sociolegal;

use Illuminate\Foundation\Http\FormRequest;

class AsignarCasoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
       
        $this->_mensaje = [
            'tipo_id.required' => 'Seleccione un diagnostico',
            'tema_id.required' => 'Seleccione una enfermedad',
            'segui_id.required' => 'Seleccione una enfermedad',
            

        ];
        $this->_reglasx = [
        'tipo_id' => ['required'],
        'tema_id' => ['required'],
        'segui_id' => ['required'],

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
     * Get the validation rules that Apply to the request.
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
