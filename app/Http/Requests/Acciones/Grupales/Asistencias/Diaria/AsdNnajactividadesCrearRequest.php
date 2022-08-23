<?php

namespace App\Http\Requests\Acciones\Grupales\Asistencias\Diaria;


use Illuminate\Foundation\Http\FormRequest;

class AsdNnajactividadesCrearRequest extends FormRequest

{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'asd_actividads_id.required'=>'Seleccione una Actividad',
            'prm_novedadx_id.required'=>'Seleccione una Novedad',
        ];


    
        // Todo: Colocar las validaciones
        $this->_reglasx = [
            'asd_actividads_id' => ['required'],
            'prm_novedadx_id' => ['required'],
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
   
   
}
