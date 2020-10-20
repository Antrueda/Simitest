<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdDinfamiliarCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
         $this->_mensaje = [
            'prm_traslado_id.required' => 'Indique por que se trasladaron',
            'prm_conoce_id.required' => 'Indique si su familia conoce las normas y limites',
            's_doc_adjunto_ar.required'=>'Debe adjuntar el genograma',
            's_doc_adjunto_ar.mimes'=>'El archivo debe ser imagen o pdf',
            
        ];
        $this->_reglasx = [
            'descripcion' => 'nullable|string|max:4000',
            'relevantes' => 'required|string|max:4000',
            'prm_familiar_id' => 'required_without:prm_hogar_id',
            'prm_hogar_id' => 'required_without:prm_familiar_id',
            'descripcion_0' => 'required|string|max:4000',
            'prm_bogota_id' => 'required|exists:parametros,id',
            'prm_traslado_id' => 'required_if:prm_bogota_id,228',
            'jefe1' => 'nullable|string|max:120',
            'prm_jefe1_id' => 'nullable|exists:parametros,id',
            'jefe2' => 'nullable|string|max:120',
            'prm_jefe2_id' => 'nullable|exists:parametros,id',
            'descripcion_1' => 'required|string|max:4000',
            'prm_cuidador_id' => 'nullable|exists:parametros,id',
            'descripcion_2' => 'required|string|max:4000',
            'afronta' => 'required|string|max:4000',
            'prm_norma_id' => 'required|exists:parametros,id',
            'prm_conoce_id' => 'required_if:prm_norma_id,227',
            'establecen' => 'nullable|array',
            'observacion' => 'nullable|string|max:4000',
            'prm_actuan_id' => 'required_if:prm_norma_id,227',
            'porque' => 'nullable|string|max:4000',
            'prm_solucion_id' => 'required|exists:parametros,id',
            'prm_problema_id' => 'required|exists:parametros,id',
            'prm_destaca_id' => 'required|exists:parametros,id',
            'prm_positivo_id' => 'required|exists:parametros,id',
            'antecedentes' => 'nullable|array',
            'problemas' => 'nullable|array',
            'incumple' => 'nullable|array',
            'normas' => 'nullable|array',
            's_doc_adjunto_ar' => 'nullable|file|mimes:pdf,jpg,jpeg|max:1024',
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
