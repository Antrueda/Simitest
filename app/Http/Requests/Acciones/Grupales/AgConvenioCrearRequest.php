<?php

namespace App\Http\Requests\Acciones\Grupales;

use Illuminate\Foundation\Http\FormRequest;

class AgConvenioCrearRequest extends FormRequest
{
    private $_mensaje;
     private $_reglasx;
 
     public function __construct()
     {
 
         $this->_mensaje = [
             's_convenio.required' => 'Ingrese el nombre del convenio',
             'i_prm_tconvenio_id.required' => 'Seleccione el tipo de convenio',
             'i_prm_entidad_id.required' => 'Ingrese la entidad',
             's_descripcion.required' => 'Ingrese una descripcion',
             'i_nconvenio.required' => 'Ingrese número del convenio',
             'd_subscrip.required' => 'Seleccione la fecha de suscripción',
             'd_terminac.required' => 'Seleccione la fecha de terminación',
         ];
         $this->_reglasx = [
             's_convenio' =>['required','unique:ag_recursos,s_recurso,'],
             'i_prm_tconvenio_id' =>['required',],
             'i_prm_entidad_id' =>['required',],
             's_descripcion' =>['required',],
             'i_nconvenio' =>['required',],
             'd_subscrip' =>['required',],
             'd_terminac' =>['required',],
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
          return $this->_reglasx;
      }
  
      public function validar()
      {
          $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
      }
 }
 