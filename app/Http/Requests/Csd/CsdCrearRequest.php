<?php

namespace App\Http\Requests\Csd;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    
    public function __construct()
    {
        
        $this->_mensaje = [
            'proposito.required' => 'Escriba el proposito',
        ];
        $this->_reglasx = [
            'proposito' => 'required|string|max:200',
            'fecha' => 'required|date|before_or_equal:'.Carbon::today()->isoFormat('YYYY-MM-DD'),
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
}
