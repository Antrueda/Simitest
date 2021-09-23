<?php

namespace App\Http\Requests\Vsi;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Foundation\Http\FormRequest;

class VsiCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'sis_depen_id.required' => 'Seleccione una upi',
            'fecha.required' => 'Seleccione una fecha',
        ];
        $this->_reglasx = [
            //'diligenc' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'sis_depen_id' => ['required'],
            'fecha' => ['required','date_format:Y-m-d',new FechaMenor()],

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
     * Get the validation rules that Apply to the request.
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
            $this->_reglasx['fecha'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }
        $this->validar();

        return $this->_reglasx;
    }

    public function validar()
    {

    }
}
