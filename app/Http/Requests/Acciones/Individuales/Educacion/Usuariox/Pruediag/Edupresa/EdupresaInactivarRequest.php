<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Edupresa;

use Illuminate\Foundation\Http\FormRequest;

class EdupresaInactivarRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
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
