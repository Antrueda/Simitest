<?php

namespace App\Http\Requests\Acciones\Individuales\Emprender;


use Illuminate\Foundation\Http\FormRequest;

class EgresoRedesCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
             'presenta_id.required'=>'Indique si presenta alguna red de apoyo',
             'factor_id.required_if'=>'Ingrese la fecha de diligenciamiento',
             'dificulta_id.required'=>'Indique si presenta alguna dificultades para acceder a alguna red de apoyo',
             'aclara_id.required_if'=>'Indique si quien',
             'predifi_id.required_if'=>'Indique si el motivo de la dificultad',
             'ruptura_id.required'=>'Indique si existe la ruptura de redes de apoyo por la exteriorización de su identidad de género',
             'restriespa_id.required'=>'Indique si ha existido restricción para el acceso a espacios, servicios o redes de apoyo',
             'motivore_id.required_if'=>'Indique si el motivo de restricción de acceso a espacios, servicio o redes de apoyo',
             'recibe_id.required'=>'Indique si recibió servicios de alguna red de apoyo ',
           
            ];
        $this->_reglasx = [
            'presenta_id' => 'required',
            'factor_id' =>  'required_if:presenta_id,227',
            'dificulta_id' => 'required',
            'aclara_id' => 'required_if:dificulta_id,227',
            'predifi_id' => 'required_if:dificulta_id,227',
            'ruptura_id' => 'required',
          //  'restriserv_id' => 'required',
            'restriespa_id' => 'required',
            'motivore_id' => 'required_if:restriespa_id,227',
            'recibe_id' => 'required',


      
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






