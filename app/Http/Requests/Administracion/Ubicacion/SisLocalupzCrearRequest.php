<?php

namespace App\Http\Requests\Administracion\Ubicacion;

use App\Traits\Administracion\Ubicacion\Localupz\LocalupzRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

class SisLocalupzCrearRequest extends FormRequest
{
    use LocalupzRequestTrait;
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
        $_mensaje = $this->getMensajesULT([]);
        return $_mensaje;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $_reglasx = $this->getReglasULT([]);
        return $_reglasx;
    }
}
