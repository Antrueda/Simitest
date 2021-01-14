<?php

namespace App\Http\Requests\Vsi;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sicosocial\Vsi;
use Illuminate\Foundation\Http\FormRequest;

class VsiEducacionEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_estudia_id.required' => 'Seleccione si actualmente estudia',
            'prm_motivo_id.required_if' => 'Seleccione un motivo',
            'prm_rendimiento_id.required_if'=>'Indique su rendimiento',
            'prm_dificultad_id.required_if'=>'Indique si tiene algun tipo de dificultad',
            'prm_leer_id.required_if'=>'Indique si sabe leer',
            'prm_escribir_id.required_if'=>'Indique si sabe escribir',
            'descripcion.required'=>'Digite la descripción',
            'causas.required_if'=>'Indique las causas de desersión',
        ];
        $this->_reglasx = [
            'prm_estudia_id' => 'required|exists:parametros,id',
            'prm_motivo_id' => 'required_if:prm_estudia_id,228',
            'prm_rendimiento_id' => 'required_if:prm_estudia_id,227',
            'prm_dificultad_id' => 'required_if:prm_estudia_id,227',
            'prm_leer_id' => 'required_if:prm_dificultad_id,227',
            'prm_escribir_id' => 'required_if:prm_dificultad_id,227',
            'descripcion' => 'required|max:4000',
            'causas' => 'required_if:prm_motivo_id,1022|array',
            'fortalezas' => 'nullable|array',
            'dificultades' => 'nullable|array',
            'dificultadesb' => 'nullable|array',
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
        
        
     
     
        if ($this->prm_dificultad_id == 227 ) {
            $this->_reglasx['dificultadesa'] = 'required|array';
            $this->_mensaje['dificultadesa.required'] = 'Indique que tipo de  dificultades';
        }
        if($this->prm_estudia_id == 228 && $this->dia=='' ||$this->dia==0&& $this->mes=='' || $this->mes==0&&$this->ano=='' || $this->ano==0 ){
            $this->_reglasx['dia'] = 'nullable|min:0|max:99';
            $this->_reglasx['mes'] = 'nullable|min:0|max:99';
            $this->_reglasx['ano'] = 'nullable|min:0|max:99';
        }

    }
}
