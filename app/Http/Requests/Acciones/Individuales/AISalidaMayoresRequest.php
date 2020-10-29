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
            'fecha'       => 'required|date',
            'prm_upi_id'  => 'required|exists:sis_depens,id',
            'razones'     => 'required|array',
            'descripcion' => 'required|string|max:4000'
        ];
    }
}
