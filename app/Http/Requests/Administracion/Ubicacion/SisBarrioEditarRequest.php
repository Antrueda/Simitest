<?php

namespace App\Http\Requests\Administracion\Ubicacion;

use App\Traits\Administracion\Ubicacion\Barrioxx\BarrioxxRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

class SisBarrioEditarRequest extends FormRequest
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
        $_mensaje=$this->getMensajesULT([]);
        return $_mensaje;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $_reglasx=$this->getReglasULT(['requestx'=>$this,'creaedit'=>true]);
        return $_reglasx;
    }
}
