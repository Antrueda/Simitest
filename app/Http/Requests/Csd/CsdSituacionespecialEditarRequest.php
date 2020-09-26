<?php

namespace App\Http\Requests\Csd;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdSituacionespecialEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'especiales.required'=>'Seleccione una situacion',
          ];
        $this->_reglasx = [
            'csd_id' => 'required|exists:csds,id',
            'especiales' => 'nullable|array',
        ];
    }
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
        return $this->_mensaje;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();
        return $this->_reglasx;    }

        public function validar()
        {

        }
}
