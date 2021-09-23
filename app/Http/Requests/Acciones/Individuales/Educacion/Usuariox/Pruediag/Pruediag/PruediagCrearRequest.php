<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Pruediag;

use Illuminate\Foundation\Http\FormRequest;

class PruediagCrearRequest extends FormRequest
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
        return [
            'fechdili.required' => 'Seleccione la fecha de diligenciamiento',
        ];
    }

    /**
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fechdili' =>['required'],
        ];
    }
}
