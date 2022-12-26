<?php

<<<<<<< HEAD:app/Http/Requests/Acciones/Individuales/Salud/Medicina/MedicamentoAsignar/MedicamentoAsignarCrearRequest.php
namespace App\Http\Requests\Acciones\Individuales\Salud\Medicina\MedicamentoAsignar;

use Illuminate\Foundation\Http\FormRequest;

class MedicamentoAsignarCrearRequest extends FormRequest
=======
namespace App\Http\Requests\Acciones\Individuales\Emprender;


use Illuminate\Foundation\Http\FormRequest;

class EgresoDerechoCrearRequest extends FormRequest
>>>>>>> jorge2:app/Http/Requests/Acciones/Individuales/Emprender/EgresoDerechoCrearRequest.php
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
<<<<<<< HEAD:app/Http/Requests/Acciones/Individuales/Salud/Medicina/MedicamentoAsignar/MedicamentoAsignarCrearRequest.php
            
            'sis_esta_id.required'          => 'Debe seleccionar el estado de la categoria.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion de la categoria.',
        ];        
        $this->_reglasx = [
           
            'estusuarios_id'       => ['required', 'integer', 'exists:estusuarios,id'],
            'sis_esta_id'          => ['required', 'integer', 'exists:sis_estas,id'],
        ];
=======
            // 'upi_id.nullable'=>'Seleccione la UPI de atención',
            // 'fecha.nullable'=>'Ingrese la fecha de diligenciamiento',
     
           
            ];
        $this->_reglasx = [
            'centro_id' => 'nullable',
            'censec_id' => 'nullable',

      
            ];
>>>>>>> jorge2:app/Http/Requests/Acciones/Individuales/Emprender/EgresoDerechoCrearRequest.php
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

<<<<<<< HEAD:app/Http/Requests/Acciones/Individuales/Salud/Medicina/MedicamentoAsignar/MedicamentoAsignarCrearRequest.php
    public function validar()
    {
=======
        public function validar()
        {
            $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
          
         
        }
>>>>>>> jorge2:app/Http/Requests/Acciones/Individuales/Emprender/EgresoDerechoCrearRequest.php
    }






