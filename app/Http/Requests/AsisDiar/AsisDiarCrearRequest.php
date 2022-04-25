<?php

namespace App\Http\Requests\AsisDiar;


use Illuminate\Foundation\Http\FormRequest;

class AsisDiarCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        // Todo: Colocar los mensajes
        $this->_mensaje = [

            'sis_depen_id.required'=>'Seleccioné la UPI/Dependencia',
            'sis_servicio_id.required'=>'Seleccioné el tipo de servicio',
            'prm_luga_acti_id.required'=>'Seleccioné el espacio donde se realiza la actividad:',
            'sis_localidad_id.required'=>'Seleccioné localidad',
            'sis_upz_id.required'=>'Seleccioné UPZ',
            'sis_barrio_id.required'=>'Seleccioné Barrio',
            'sis_departam_id'=>'Seleccioné Departamento ',
            'sis_municipio_id'=>'Seleccioné Municipio',
            'prm_actividad_id'=>'Seleccioné Nombre del programa o actividad',
            'prm_grupo_id'=>'Seleccioné Grupo',
            'numepagi'=>'Ingrese el numero de paginas ',
            'fechdili'=>'Ingrese la Fecha de diligenciamiento'

        ];

        // Todo: Colocar las validaciones
        $this->_reglasx = [

            'sis_depen_id' => 'required|exists:sis_depens,id',
            'sis_servicio_id'=> 'required',
            'prm_luga_acti_id'=> 'required',
            'sis_localidad_id'=> 'required',
            'sis_upz_id'=> 'required',
            'sis_barrio_id'=> 'required',
            'sis_departam_id'=> 'required',
            'sis_municipio_id'=> 'required',
            'prm_actividad_id'=> 'required',
            'prm_grupo_id'=> 'required',
            'numepagi'=> 'required',
            'fechdili'=> 'required'
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
        return $this->_reglasx;
    }

    public function validar()
    {



/// funcion para validar 


    }
}
