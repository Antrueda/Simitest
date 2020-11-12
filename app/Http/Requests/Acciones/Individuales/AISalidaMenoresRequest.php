<?php

namespace App\Http\Requests\Acciones\Individuales;

use Illuminate\Foundation\Http\FormRequest;

class AISalidaMenoresRequest extends FormRequest
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
            'prm_upi_id'        => 'required|exists:sis_depens,id',
            'fecha'             => 'required|date',
            'prm_hor_sal_id'    => 'required|exists:parametros,id',
            'primer_apellido'   => 'required|string|max:120',
            'segundo_apellido'  => 'nullable|string|max:120',
            'primer_nombre'     => 'required|string|max:120',
            'segundo_nombre'    => 'nullable|string|max:120',
            'prm_doc_id'        => 'required|exists:parametros,id',
            'documento'         => 'required|integer',
            'prm_parentezco_id' => 'required|exists:parametros,id',
            'prm_autorizado_id' => 'required|exists:parametros,id',
            'ape1_autorizado'   => 'nullable|string|max:120',
            'ape2_autorizado'   => 'nullable|string|max:120',
            'nom1_autorizado'   => 'nullable|string|max:120',
            'nom2_autorizado'   => 'nullable|string|max:120',
            'prm_doc2_id'       => 'nullable|exists:parametros,id',
            'doc_autorizado'    => 'nullable',
            'prm_parentezco2_id'=> 'nullable|exists:parametros,id',
            'prm_carta_id'      => 'nullable|exists:parametros,id',
            'prm_copiaDoc_id'   => 'nullable|exists:parametros,id',
            'prm_copiaDoc2_id'  => 'nullable|exists:parametros,id',
            'descripcion'       => 'required|string|max:4000',
            'objetos'           => 'required|string|max:4000',
            'prm_upi2_id'       => 'required|exists:parametros,id',
            'tiempo'            => 'required|integer',
            'novedad'           => 'required|string|max:120',
            'dir_salida'        => 'required|string|max:120',
            'tel_contacto'      => 'required|integer',
            'causa'             => 'nullable|string|max:4000',
            'nombres_recoge'    => 'required|string|max:120',
            'doc_recoge'        => 'required|string|max:120',
            'responsable'       => 'required|exists:users,id',
            'user_doc1_id'      => 'required|exists:users,id',
            'objetivo'          => 'required|array',
            'condiciones'       => 'required|array'
        ];
    }
}
