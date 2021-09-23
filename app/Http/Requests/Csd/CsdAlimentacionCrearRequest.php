<?php

namespace App\Http\Requests\Csd;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdAlimentacionCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'cant_personas.required'=>'Ingrese la cantidad de personas que ingieron alimentos',
            'frecuencia.required'=>'Seleccione con que frecuencia compra alimentos',
            'compra.required'=>'Seleccione donde compra alimentos',
            'ingeridas.required'=>'Establezca que comidas come diariamente',
            'prm_horario_id.required'=>'Indique si tiene un horario de consumo para los alimentos',
            'prepara.required'=>'Indique quien prepara los alimentos',
            'prm_apoyo_id.required'=>'Seleccione si recibe apoyo alimentario',
            'prm_entidad_id.required_if'=>'Seleccione de que entidad recibe apoyo entidad',
     
          ];
        $this->_reglasx = [
            'cant_personas'     => 'required|integer|min:0|max:99',
            'frecuencia'        => 'required|array',
            'compra'            => 'required|array',
            'ingeridas'         => 'required|array',
            'prm_horario_id'    => 'required|exists:parametros,id',
            'prepara'           => 'required|array',
            'prm_apoyo_id'      => 'required|exists:parametros,id',
            'prm_entidad_id'    => 'required_if:prm_apoyo_id,227',
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
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();
        return $this->_reglasx;    }

        public function validar()
        {

        }
}
