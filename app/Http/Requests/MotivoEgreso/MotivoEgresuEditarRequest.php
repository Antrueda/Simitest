<?php

namespace App\Http\Requests\MotivoEgreso;

use Illuminate\Foundation\Http\FormRequest;

class MotivoEgresuEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

      
        $this->_mensaje = [
            'motivoese_id.required' => 'Seleccione un Motivo de egreso secundario',
            'motivoe_id.required' => 'Seleccione un Motivo de egreso',
            

        ];
        $this->_reglasx = [
        'motivoese_id' => ['required'],
        'motivoe_id' => ['required'],

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
