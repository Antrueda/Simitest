<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdDinfamiliarEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
         $this->_mensaje = [
            'prm_traslado_id.required' => 'Indique por que se trasladaron',
            'prm_conoce_id.required_if' => 'Indique si su familia conoce las normas y limites',
            's_doc_adjunto_ar.required'=>'Debe adjuntar el genograma',
            's_doc_adjunto_ar.mimes'=>'El archivo debe ser imagen o pdf',
            'prm_familiar_id.required_without' => 'Indique la Tipología Familiar',
            'prm_hogar_id.required_without' => 'Indique la Tipología de Hogar',
            'prm_bogota_id.required' => 'Indique por que se trasladaron Bogotá',
            'prm_solucion_id.required' => 'Indique como solucionan los problemas en casa',
            'prm_problema_id.required' => 'Indique a quién acude cuando hay problemas en casa',
            'prm_destaca_id.required' => 'Indique si los miembros de la familia se destacan',
            'prm_positivo_id.required' => 'Indique Cómo actúa la familia cuando hay sucesos positivos',
            'prm_actuan_id.required_if'=>'Indique como actúan los miembros de la familia',
            'porque.required_if'=>'Escriba el por qué',
            'descripciona.required' => 'El campo de descripción de composicion familiar es obligatorio',
            'relevantes.required' => 'El campo de acontecimientos relevantes de composicion familiar es obligatorio',
            'descripcionb.required' => 'El campo de descripción de de hechos relevantes es obligatorio',
            'descripcionc.required' => 'El campo de descripción de en que lugar se realiza el cuidado es obligatorio',
            'prm_norma_id.required' => 'Indique si al interior de la familia hay normas y límites',
            'afronta.required' => 'Describa como las afronta',

        ];
        $this->_reglasx = [
            'descripcion' => 'nullable|string|max:4000',
            'relevantes' => 'required|string|max:4000',
            'prm_familiar_id' => 'required_without:prm_hogar_id',
            'prm_hogar_id' => 'required_without:prm_familiar_id',
            'descripciona' => 'required|string|max:4000',
            'prm_bogota_id' => 'required|exists:parametros,id',
            'prm_traslado_id' => 'required_if:prm_bogota_id,228',
            'jefea' => 'nullable|string|max:120',
            'prm_jefea_id' => 'nullable|exists:parametros,id',
            'jefeb' => 'nullable|string|max:120',
            'prm_jefeb_id' => 'nullable|exists:parametros,id',
            'descripcionb' => 'required|string|max:4000',
            'prm_cuidador_id' => 'nullable|exists:parametros,id',
            'descripcionc' => 'required|string|max:4000',
            'afronta' => 'required|string|max:4000',
            'prm_norma_id' => 'required|exists:parametros,id',
            'prm_conoce_id' => 'required_if:prm_norma_id,227',
            'establecen' => 'nullable|array',
            'observacion' => 'nullable|string|max:4000',
            'prm_actuan_id' => 'required_if:prm_norma_id,227',
            'porque' => 'required_if:prm_actuan_id,588|max:4000',
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
