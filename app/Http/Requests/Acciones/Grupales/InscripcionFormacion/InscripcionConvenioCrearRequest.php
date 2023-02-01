<?php

namespace App\Http\Requests\Acciones\Grupales\InscripcionFormacion;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class InscripcionConvenioCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'upi_id.required'=>'Seleccione la UPI',
            'user_id.required'=>'Seleccione la persona quien diligencia',
            'conve_id.required' => 'Seleccione un Convenio',
            'sede_id.required' => 'Seleccione una Sede/Centro',
            'progra_id.required' => 'Seleccione el Programa',
            'tipop_id.required' => 'Seleccione el Tipo de Programa',
            'modal_id.required' => 'Seleccione la Modalidad',
            'fecha.required'=>'Indique la fecha de diligenciamiento',
            'fecha_inicio.required'=>'Indique la fecha de inicio',
            'fecha_final.required'=>'Indique la fecha de final',
            'numficha.required'=>'Digite el numero de ficha',


            ];
        $this->_reglasx = [
            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'fecha_inicio' => ['required', 'date_format:Y-m-d'],
            'fecha_final' => ['required', 'date_format:Y-m-d'],
            'upi_id'  => 'required|exists:sis_depens,id',
            'user_id'  => 'required',
            'conve_id'  => 'required',
            'progra_id'  => 'required',
            'tipop_id'=> 'required',
            'modal_id'=> 'required',
            'sede_id'=> 'required',
            'numficha'=> 'required',

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
        if ($this->fecha != ''&& $this->prm_upi_id ) {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha,
                'upixxxxx' => $this->prm_upi_id,
                'formular'=>3,
                ]);
                $this->_reglasx['fecha'][] = new TiempoCargueRule([
                    'puedexxx' => $puedexxx
                ]);
        }
        $this->validar();

        return $this->_reglasx;
    }
        public function validar()
        {

        }
}

