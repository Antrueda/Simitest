<?php

namespace App\Http\Requests\Administracion\Ubicacion;

use App\Traits\Administracion\Ubicacion\Upzbarri\UpzbarriRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

class SisUpzbarriEditarRequest extends FormRequest
{
    use UpzbarriRequestTrait;

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
        $_mensaje=$this->getMensajesULT([]);
        return $_mensaje;
    }
    /**
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $_reglasx=$this->getReglasULT([]);
        return $_reglasx;
    }
}
