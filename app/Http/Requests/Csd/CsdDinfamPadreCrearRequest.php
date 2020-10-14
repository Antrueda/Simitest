<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdDinfamPadreCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
         $this->_mensaje = [
            'prm_convive_id.required' => 'Indique si ha convivido',
            'hijo.required' => '¿Cuantos hijos?',
           
        ];
        $this->_reglasx = [
            'prm_convive_id' => 'required|exists:parametros,id',
            'dia' => 'exclude_if:prm_convive_id,228|min:0|max:30',
            'mes' => 'exclude_if:prm_convive_id,228|min:0|max:11',
            'ano' => 'exclude_if:prm_convive_id,228|min:0|max:99',
            'hijo' => 'required|integer|min:0|max:99',
            'prm_separa_id' => 'nullable|exists:parametros,id',
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
