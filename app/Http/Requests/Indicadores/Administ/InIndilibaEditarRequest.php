<?php

namespace App\Http\Requests\Indicadores\Administ;

use Illuminate\Foundation\Http\FormRequest;

class   InIndilibaEditarRequest extends FormRequest
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
        $reglasxx=[
            'prm_nivelxxx_id' => ['required',],
            'prm_categori_id' => ['required',],
        ];
        return $reglasxx;
    }

    public function messages()
    {
        return [
            'prm_nivelxxx_id.required' => 'Seleccione un nivel',
            'prm_categori_id.required' => 'Seleccione una categoría',
        ];
    }
}
