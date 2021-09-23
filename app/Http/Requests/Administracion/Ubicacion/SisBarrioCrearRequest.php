<?php

namespace App\Http\Requests\Administracion\Ubicacion;

use App\Traits\Administracion\Ubicacion\Barrioxx\BarrioxxRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

class SisBarrioCrearRequest extends FormRequest
{
    use BarrioxxRequestTrait;
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
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $_reglasx = $this->getReglasULT(['requestx'=>$this,'creaedit'=>false]);
        return $_reglasx;
    }
}
