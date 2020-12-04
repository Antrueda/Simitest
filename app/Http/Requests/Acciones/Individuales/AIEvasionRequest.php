<?php

namespace App\Http\Requests\Acciones\Individuales;

use Illuminate\Foundation\Http\FormRequest;

class AIEvasionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        return [
            'departamento_id' => 'required|exists:sis_departamentos,id',
            'municipio_id' => 'required|exists:sis_municipios,id',
            'fecha_diligenciamiento' => 'required|date',
            'prm_upi_id'    => 'required|exists:sis_depens,id',
            'lugar_evasion' => 'required|string|max:120',
            'fecha_evasion' => 'required|date|',
            'hora_evasion'  => 'required',
            'nnaj_talla'    => 'required|integer',
            'nnaj_peso'     => 'required|integer',
            'prm_contextura_id' => 'required|exists:parametros,id',
            'prm_rostro_id' => 'required|exists:parametros,id',
            'prm_piel_id'   => 'required|exists:parametros,id',
            'prm_colCabello_id' => 'required|exists:parametros,id',
            'prm_tinturado_id'  => 'required|exists:parametros,id',
            'tintura'       => 'required_if:prm_tinturado_id,227|max:120',
            'prm_tipCabello_id' => 'required|exists:parametros,id',
            'prm_corCabello_id' => 'required_unless:prm_tipCabello_id,1459|exists:parametros,id',
            'prm_ojos_id'   => 'required|exists:parametros,id',
            'prm_nariz_id'  => 'required|exists:parametros,id',
            'prm_tienelunar_id' => 'required|exists:parametros,id',
            'cuantos'       => 'required_if:prm_tienelunar_id,227',
            'prm_tamlunar_id'   => 'required_if:prm_tienelunar_id,227|exists:parametros,id',
            'senias'        => 'required|string|max:4000',
            'circunstancias'=> 'required|string|max:4000',
            'observaciones_fam'=> 'required|string|max:4000',
            'prm_reporta_id'   => 'required|exists:parametros,id',
            'prm_llamada_id'   => 'required_if:prm_reporta_id,227|exists:parametros,id',
            'radicado'         => 'required_if:prm_reporta_id,227|max:120',
            'recibe_denuncia'  => 'required_if:prm_reporta_id,227|max:120',
            'user_doc1_id'     => 'required|exists:users,id',
            'user_doc2_id'     => 'required|exists:users,id',
            'responsable'      => 'required|exists:users,id',
            'institución'      => 'required_if:prm_reporta_id,227|max:120',
            'nombre_recibe'    => 'required_if:prm_reporta_id,227|max:120',
            'cargo_recibe'     => 'required_if:prm_reporta_id,227|max:120',
            'placa_recibe'     => 'required_if:prm_reporta_id,227|max:120',
            'fecha_denuncia'   => 'required_if:prm_reporta_id,227',
            'hora_denuncia'    => 'required_if:prm_reporta_id,227',
            'prm_hor_denuncia_id' => 'required_if:prm_reporta_id,227|exists:parametros,id'
            ];
    }
}
