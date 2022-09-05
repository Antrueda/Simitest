<?php

namespace App\Http\Requests\Acciones\Individuales\Sociolegal;


use Illuminate\Foundation\Http\FormRequest;

class SeguimientoJuriCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'upi_id.required'=>'Seleccione la UPI de atención',
            'fecha.required'=>'Ingrese la fecha de diligenciamiento',
            'i_prm_ha_estado_pard_id.required'=>'Seleccione la tipo de consulta',
            'tipoc_id.required'=>'Seleccione el tipo de caso',
            'temac_id.required'=>'Seleccione el tema del caso',
            'descripcion.required'=>'Se necesita una descripción del seguimiento',

            
           
        
            ];
        $this->_reglasx = [
            'upi_id' => 'required',
            'fecha' => 'required',
            'i_prm_ha_estado_pard_id' => 'required',
            'num_sim' => 'nullable',
            'centro_id' => 'nullable',
            'censec_id' => 'nullable',
            'tipoc_id' => 'required',
            'temac_id' => 'required',
            'prm_sujeto' => 'nullable',
            'estadocaso' => 'nullable',
            'descripcion' => 'required',
            
            
            
            
           
         
           

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







