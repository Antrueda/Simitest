<?php

namespace App\Http\Requests\FichaIngreso;

use App\Traits\Fi\Compfami\CFRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

class FiCompfamiUpdateRequest extends FormRequest
{
    use CFRequestTrait;

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
        return $this->getMensajesULT([]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->getReglasULT($this,['creaedit'=>true]);
    }
}
