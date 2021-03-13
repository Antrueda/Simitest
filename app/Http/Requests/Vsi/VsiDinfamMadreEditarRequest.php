<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiDinfamMadreEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_convive_id.required' => 'Seleccione si convive',
            'prm_separa_id.required' => 'Seleccione motivo de la separacion',
            'hijo.required' => '¿Cuantos hijos?',
        ];
        $this->_reglasx = [
            'prm_convive_id' => 'required|exists:parametros,id',
            'dia' => 'nullable|min:0|max:30',
            'mes' => 'nullable|min:0|max:11',
            'ano' => 'nullable|min:0|max:99',
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
        if($this->prm_convive_id ==227&&$this->mes==null&&$this->ano==null){
            $this->_mensaje['dia.required'] = 'Ingrese cuantos días';
            $this->_reglasx['dia'] = 'required';
        }
        if($this->prm_convive_id ==227&&$this->dia==null&&$this->ano==null){
            $this->_mensaje['mes.required'] = 'Ingrese cuantos meses';
            $this->_reglasx['mes'] = 'required';
        }
        if($this->prm_convive_id ==227&&$this->dia==null&&$this->mes==null){
            $this->_mensaje['ano.required'] = 'Ingrese cuantos años';
            $this->_reglasx['ano'] = 'required';
        }
    }
}
