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
            'prm_upi_id'     => 'required|exists:sis_depens,id',
            'fecha'             => 'required|date',
            'hora_retorno'   => 'required',
            'descripcion'    => 'required|string|max:4000',
            'observaciones'  => 'required|string|max:4000',
            'nombres_retorna'=> 'nullable|string|max:120',
            'prm_doc_id'     => 'nullable|exists:parametros,id',
            'doc_retorna'    => 'nullable|integer',
            'prm_parentezco_id' => 'nullable|exists:parametros,id',
            'responsable'    => 'required|exists:users,id',
            'user_doc1_id'   => 'required|exists:users,id',
            ];
    }
}
