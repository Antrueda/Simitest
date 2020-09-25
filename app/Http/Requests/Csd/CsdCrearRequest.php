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
            'fecha.required'=>'Seleccione una fecha',
            'fecha.date'=>'La fecha ingresada debe tener fomato de fecha',
            'fecha.before_or_equal'=>'No se permite el ingreso de fechas superiores a hoy',
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
