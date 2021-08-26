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
//
    public function __construct()
    {
        ///
        $this->_mensaje = [
            'prm_upi_id.required'=>'Seleccione la UPI de origen',
            'prm_trasupi_id.required'=>'Seleccione la UPI donde recibe',
            'respone_id.required'=>'Seleccione responsable de la UPI que envía',
            'responr_id.required'=>'Seleccione responsable de la UPI que recibe',
            'prm_serv_id.required'=>'Seleccione el servicio',
            'remision_id.required'=>'Seleccione el tipo de remisión',
            'tipotras_id.required'=>'Seleccione el tipo de traslado',
            'user_doc.required'=>'Seleccione el responsable de la UPI',
            'fecha.required'=>'Indique la fecha de diligenciamiento',
            'observaciones.required'=>'Digite la observación',
           // 'fecha.after_or_equal'=>'No se permite el ingreso anterior a la fecha '.Carbon::today()->subDays($this->tiempoxx)->isoFormat('DD-MM-YYY'),
            
            
            ];
        $this->_reglasx = [
            //'fecha' => ['required', 'date','after_or_equal:'.Carbon::today()->subDays($this->tiempoxx)->isoFormat('YYYY-MM-DD')],
            'prm_upi_id'  => 'required|exists:sis_depens,id',
            'prm_trasupi_id'  => 'required|exists:sis_depens,id',
            'tipotras_id'  => 'required',
            'remision_id'  => 'required',
            'trasladototal'  => 'nullable',
            'user_doc'  => 'required',
            'prm_serv_id'  => 'required',
            'responr_id'  => 'required',
            'respone_id'  => 'required',
            'observaciones'  => 'required',
            
                        
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
        // if ($this->fecha != ''&& $this->prm_upi_id ) {
        //     $puedexxx = $this->getPuedeCargar([
        //         'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
        //         'fechregi' => $this->fecha,
        //         'upixxxxx' => $this->prm_upi_id,
        //         'formular'=>3,
        //         ]);
        //         if (!$puedexxx['tienperm']) {
        //             $this->_mensaje['sinpermi.required'] =  $puedexxx['msnxxxxx'];
        //             $this->_reglasx['sinpermi'] = 'required';
        //         }
        // }
        $this->validar();

        return $this->_reglasx;
    }
        public function validar()
        {   
            $this->_reglasx['fecha'] = ['required', 'date','after_or_equal:'.Carbon::today()->subDays($this->tiempoxx)->isoFormat('YYYY-MM-DD')];
            $this->_mensaje['fecha.after_or_equal'] =  'No se permite el ingreso anterior a la fecha '.Carbon::today()->subDays($this->tiempoxx)->isoFormat('DD-MM-YYY');

            if($this->prm_serv_id==8&&$this->prm_trasupi_id==37){
                $this->_reglasx['cuid_doc'] = 'required';
                $this->_reglasx['auxe_doc'] = 'required';
            
                $this->_reglasx['psico_doc'] = 'required';
                $this->_reglasx['auxil_doc'] = 'required';
                $this->_mensaje['cuid_doc.required'] =  'Por favor ingrese el cuidador';
                $this->_mensaje['auxe_doc.required'] =  'Por favor ingrese el auxiliar de enfermería';
        
                $this->_mensaje['psico_doc.required'] =  'Por favor ingrese el trabajador social o psicólogo';
                $this->_mensaje['auxil_doc.required'] =  'Por favor ingrese el auxiliar administrativo';
                if($this->remision_id==2640){
                    $this->_reglasx['doce_doc'] = 'required';
                    $this->_mensaje['doce_doc.required'] =  'Por favor ingrese el apoyo academico o docente';
                    }
                }
        }
}


