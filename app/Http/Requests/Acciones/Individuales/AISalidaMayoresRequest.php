<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class AISalidaMayoresRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_upi_id.required'=>'Seleccione la UPI',
            'user_doc2_id.required'=>'Seleccione el responsable de la UPI',
            'fecha.required_if'=>'Indique la fecha de diligenciamiento',


            ];
        $this->_reglasx = [
            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'prm_upi_id'  => 'required|exists:sis_depens,id',
            'user_doc2_id'  => 'required',

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
        if ($this->fecha != ''&& $this->prm_upi_id ) {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha,
                'upixxxxx' => $this->prm_upi_id,
                'formular'=>3,
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


