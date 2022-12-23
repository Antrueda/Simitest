<?php

namespace App\Http\Requests\Acciones\Individuales\Emprender;


use Illuminate\Foundation\Http\FormRequest;

class EgresoDerechoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            // 'upi_id.nullable'=>'Seleccione la UPI de atención',
            // 'fecha.nullable'=>'Ingrese la fecha de diligenciamiento',
     
           
            ];
        $this->_reglasx = [
            'centro_id' => 'nullable',
            'censec_id' => 'nullable',

      
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
        $this->validar();
        return $this->_reglasx;    }

        public function validar()
        {
            $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
          
         
        }
    }






