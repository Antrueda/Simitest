<?php

namespace App\Http\Requests\Acciones\Individuales;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class AISalidaMayoresRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_upi_id.required'=>'Seleccione la UPI',
            'user_doc2_id.required'=>'Seleccione el responsable de la UPI',
            'fecha.required_if'=>'Indique la fecha de diligenciamiento',
            
            
            ];
        $this->_reglasx = [
            'fecha'       => 'required|date',
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


