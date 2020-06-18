<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiGeneracionIngresoCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'acgeingr_id.required' => 'Seleccione actividad realiza generar ingreso',
            'trabinfo_id.required' => 'Seleccione seleccione trabajo informal',
            'otractiv_id.required' => 'Seleccione seleccione otra actividad',
            'noingres_id.required' => 'Seleccione porque no genera ingresos',
            'jogeingr_id.required' => 'Seleccione en que jornada genera ingreso',
            'frecingr_id.required' => 'Seleccione frecuencia recibe ingreso',
            'ingrmensual.required' => 'Seleccione total ingreso',
            'relabora_id.required' => 'Seleccione tipo relacion laboral',
        ];

        $this->_reglasx = [
            'acgeingr_id' => ['Required'],
            'trabinfo_id' => ['Required'],
            'otractiv_id' => ['Required'],
            'noingres_id' => ['Required'],
            'jogeingr_id' => ['Required'],
            'frecingr_id' => ['Required'],
            'ingrmensual' => ['Required'],
            'relabora_id' => ['Required'],
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
        // dd($dataxxxx);
        switch($dataxxxx['acgeingr_id']){
            case 626:
            $this->_mensaje['s_trabajo_formal.required'] ='Seleccione mencione trabajo formal';
            $this->_reglasx['s_trabajo_formal']='required';
            break;
        }

        if ($dataxxxx['jogeingr_id'] == 467){
            $this->_mensaje['s_hora_inicial.required'] ='Seleccione hora inicial';
            $this->_reglasx['s_hora_inicial']='required';
            $this->_mensaje['s_hora_final.required'] ='Seleccione hora final';
            $this->_reglasx['s_hora_final']='required';
        }
        
    }
}
