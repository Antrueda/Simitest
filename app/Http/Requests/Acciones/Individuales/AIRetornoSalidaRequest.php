<?php

namespace App\Http\Requests\Acciones\Individuales;

use Illuminate\Foundation\Http\FormRequest;

class AIRetornoSalidaRequest extends FormRequest
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
            'sis_nnaj_id'    => 'required|exists:sis_nnajs,id',
            'prm_upi_id'     => 'required|exists:sis_depens,id',
            'fecha'             => 'required|date',
            'hora_retorno'   => 'required',
            'prm_hor_ret_id' => 'required|exists:parametros,id',
            'descripcion'    => 'required|string|max:4000',
            'observaciones'  => 'required|string|max:4000',
            'nombres_retorna'=> 'nullable|string|max:120',
            'prm_doc_id'     => 'nullable|exists:parametros,id',
            'doc_retorna'    => 'nullable|integer',
            'prm_parentezco_id' => 'nullable|exists:parametros,id',
            'responsable'    => 'required|exists:users,id',
            'user_doc1_id'   => 'required|exists:users,id',
            'condiciones' => 'required|array',
        ];
    }
}
