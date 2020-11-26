<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiConsentimientoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'user_doc1_id.required'=> 'Seleccione el funcionario responsable',
        ];
        $this->_reglasx = [
            'user_doc1_id' => 'required|exists:users,id',
            'user_doc2_id' => 'required|exists:users,id',
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
        if($this->user_doc1_id==$this->user_doc2_id){
            $this->_mensaje['existexx.required'] = 'No se puede registrar el mismo funcionario';
            $this->_reglasx['existexx'] = ['Required',];
        } 
    }
}
