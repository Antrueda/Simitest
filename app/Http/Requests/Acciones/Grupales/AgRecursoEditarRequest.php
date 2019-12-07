<?php

namespace App\Http\Requests\Acciones\Grupales;

use Illuminate\Foundation\Http\FormRequest;

class AgRecursoEditarRequest extends FormRequest
{
    private $_mensaje;
     private $_reglasx;
 
     public function __construct()
     {
 
         $this->_mensaje = [
             's_recurso.required' => 'Ingrese el nombre del recurso',
             'i_prm_umedida_id.required' => 'Seleccione la unidad de medida del recurso',
             'i_prm_trecurso_id.required' => 'Seleccione el tipo del recurso',
         ];
         $this->_reglasx = [
             's_recurso' =>['required','unique:ag_recursos,s_recurso,'],
             'i_prm_umedida_id' =>['required',],
             'i_prm_trecurso_id' =>['required',],
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
      }
  
      public function validar()
      {
          $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
      }
 }
 