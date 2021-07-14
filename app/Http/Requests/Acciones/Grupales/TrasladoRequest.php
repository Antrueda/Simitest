<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Rules\FechaMenor;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class TrasladoRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_upi_id.required'=>'Seleccione la UPI de origen',
            'prm_trasupi_id.required'=>'Seleccione la UPI donde recibe',
            'prm_serv_id.required'=>'Seleccione el servicio',
            'tipotras_id.required'=>'Seleccione el tipo de traslado',
            'trasladototal.required'=>'Indique cuantos traslados son en total',
            'user_doc.required'=>'Seleccione el responsable de la UPI',
            'fecha.required'=>'Indique la fecha de diligenciamiento',
            
            
            ];
        $this->_reglasx = [
            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],     
            'prm_upi_id'  => 'required|exists:sis_depens,id',
            'prm_trasupi_id'  => 'required|exists:sis_depens,id',
            'tipotras_id'  => 'required',
            'trasladototal'  => 'required',
            'user_doc'  => 'required',
                        
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
                if (!$puedexxx['tienperm']) {
                    $this->_mensaje['sinpermi.required'] =  $puedexxx['msnxxxxx'];
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


