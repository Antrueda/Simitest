<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class TrasladonnajCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
///
        $this->_mensaje = [
            'sis_nnaj_id.required'=>'Seleccione un NNAJ',
            ];
        $this->_reglasx = [
            'sis_nnaj_id' => 'required',
            'observaciones' => 'nullable',
            
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
            $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
            $datosbas=Traslado::find($this->segments()[0]);
            if($datosbas['prm_trasupi_id']==37){
                $this->_reglasx['motivoe_id'] = 'required';
                $this->_mensaje['motivoe_id.required'] =  'Por favor ingrese el motivo de egreso';
                $this->_reglasx['motivoese_id'] = 'required';
                $this->_mensaje['motivoese_id.required'] =  'Por favor ingrese el motivo de egreso secundario';
                $this->_reglasx['observaciones'] = 'required';
                $this->_mensaje['observaciones.required'] =  'Por favor ingrese la observación';
       
                }
            
            
        }
}



