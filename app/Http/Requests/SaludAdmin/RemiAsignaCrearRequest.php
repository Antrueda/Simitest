<?php

namespace App\Http\Requests\SaludAdmin;

use Illuminate\Foundation\Http\FormRequest;

class RemiAsignaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
       
        $this->_mensaje = [
            'remi_id.required' => 'Seleccione un curso',
            'reesp_id.required' => 'Seleccione un modulo',
            

        ];
        $this->_reglasx = [
        'remi_id' => ['required'],
        'reesp_id' => ['required'],

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
