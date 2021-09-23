<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag;

use Illuminate\Foundation\Http\FormRequest;

class EdaGradoInactivarRequest extends FormRequest
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

    public function messages()
    {
        return [];
    }
    /**
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
