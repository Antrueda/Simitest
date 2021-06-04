<?php

namespace App\Http\Requests\Indicadores\Ajustes;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class InLigruTemacomboParametroCrearRequest extends FormRequest
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
            'in_ligru_temacombo_id' => 'required|exists:in_ligru_temacombo,id', 
            'parametro_id' => [
                'required', 
                Rule::unique('lgtemacombo_parametro')->where(function ($query) {
                    return $query->where('in_ligru_temacombo_id', request()->in_ligru_temacombo_id)
                    ->where('parametro_id', request()->parametro_id);
                }),
               ]            
        ];
    }

    public function messages()
    {
        return [            
            'in_ligru_temacombo_id.required'=>'Requerido.',
            'in_ligru_temacombo_id.exists'=>'Debe seleccionar un grupo válido.',
            'parametro_id.required'=>'Requerido.',
            'parametro_id.unique'=>'La respuesta seleccionada se encuentra asignada a la pregunta actual.'
        ];
    } 
}
