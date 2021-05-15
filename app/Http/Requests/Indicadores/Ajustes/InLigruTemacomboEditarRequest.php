<?php

namespace App\Http\Requests\Indicadores\Ajustes;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class InLigruTemacomboEditarRequest extends FormRequest
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
            'in_ligru_id' => 'required|exists:in_ligrus,id',
            'temacombo_id' => [
                'required',
                Rule::unique('in_ligru_temacombo')->where(function ($query) {
                    return $query->where('in_ligru_id', request()->in_ligru_id)
                        ->where('temacombo_id', request()->temacombo_id)
                        ->where('id', '!=', request()->objetoxx);
                }),
            ]
        ];
    }

    public function messages()
    {
        return [
            'in_ligru_id.required' => 'Requerido.',
            'in_ligru_id.exists' => 'Debe seleccionar un grupo válido.',
            'temacombo_id.required' => 'Requerido.',
            'temacombo_id.unique' => 'La pregunta seleccionada se encuentra asignada al grupo seleccionado.'
        ];
    }
}
