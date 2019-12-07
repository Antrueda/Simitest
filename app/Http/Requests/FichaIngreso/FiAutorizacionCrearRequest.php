<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class FiAutorizacionCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_modalidad_id.required' => 'Seleccione la modalidad',
            'd_fecha_autorizacion.required' => 'Seleccione fecha autorizacion',
            'i_prm_tipo_diligencia_id.required' => 'Seleccione el tipo de diligenciamiento',
        ];
        $this->_reglasx = [
            'i_prm_modalidad_id' => ['Required'],
            'd_fecha_autorizacion' => ['Required'],
            'i_prm_tipo_diligencia_id' => ['Required'],
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
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        // $edad = Carbon::parse($dataxxxx['edad_nna'])->age;
        // if($edad >= 18){ //Mayor de edad
        //     $this->_mensaje['s_nombre_mayor.required'] = 'Digite el nombre del represntante legal o nna mayor de edad';
        //     $this->_reglasx['s_nombre_mayor']='Required';
        // }
        
    }
}
