<?php

namespace App\Http\Requests\Indicadores\Administ;

use Illuminate\Foundation\Http\FormRequest;

class InIndilibaCrearRequest extends FormRequest
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
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'prm_nivelxxx_id' => ['required',],
            'prm_categori_id' => ['required',],
        ];
    }

    public function messages()
    {
        return [
            'prm_nivelxxx_id.required' => 'Seleccione un nivel',
            'prm_categori_id.required' => 'Seleccione una categoría',
        ];
    }

}
