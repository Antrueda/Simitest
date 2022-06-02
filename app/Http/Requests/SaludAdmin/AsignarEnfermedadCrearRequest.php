<?php

namespace App\Http\Requests\SaludAdmin;

use Illuminate\Foundation\Http\FormRequest;

class AsignarEnfermedadCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
       
        $this->_mensaje = [
            'diag_id.required' => 'Seleccione un diagnostico',
            'enfe_id.required' => 'Seleccione una enfermedad',
            

        ];
        $this->_reglasx = [
        'diag_id' => ['required'],
        'enfe_id' => ['required'],

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
