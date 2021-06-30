<?php

namespace App\Http\Requests\Csd;

use App\Rules\FechaMenor;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;
    public function __construct()
    {

        $this->_mensaje = [
            'proposito.required' => 'Escriba el proposito',
            'fecha.required'=>'Seleccione una fecha',
            'fecha.date'=>'La fecha ingresada debe tener fomato de fecha',
            'fecha.before_or_equal'=>'No se permite el ingreso de fechas superiores a hoy',
        ];
        $this->_reglasx = [
            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'proposito' => 'required|string|max:100',
            //'fecha' => 'required|date|before_or_equal:'.Carbon::today()->isoFormat('YYYY-MM-DD'),
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
        if ($this->fecha != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha
            ]);

            if (!$puedexxx['tienperm']) {
                $this->_mensaje['sinpermi.required'] = 'NO TIENE PREMISOS PARA REGISTRAR INFORMACION INFERIOR A LA FECHA: ' . $puedexxx['fechlimi'];
                $this->_reglasx['sinpermi'] = 'required';
            }
        }
        $this->validar();

        return $this->_reglasx;
    }
        public function validar()
        {

        }
}
