<?php

namespace App\Http\Requests\Ayudline\Backend;

use App\Traits\Ayudline\Backend\Ayudaxxx\RequestTrait;
use Illuminate\Foundation\Http\FormRequest;

class AyudaBackendEditarRequest extends FormRequest
{
    use RequestTrait;

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
