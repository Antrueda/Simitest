<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiSaludUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    
    public function __construct()
    {
        $this->_mensaje = [
            'regisalu_id.required' => 'Seleccione régimen salud',
            'sis_entidad_salud_id.required' => 'Seleccione entidad  / régimen',
            'tiensalu_id.required' => 'Seleccione tiene sisben',
            'tiendisc_id.required' => 'Seleccione tiene discapacidad',
            'tipodisc_id.required' => 'Seleccione tipo discapacidad',
            'ticedisc_id.required' => 'Seleccione tiene certificado discapacidad',
            'dipeinde_id.required' => 'Seleccione discapacidad permite independencia',
            'estagest_id.required' => 'Seleccione se encuentra en estado gestación',
            'estalact_id.required' => 'Seleccione se encuentra lactando',
            'probsalu_id.required' => 'Seleccione tiene problemas de salud',
            'consmedi_id.required' => 'Seleccione consume medicamentos de forma permanente',
            'tienhijo_id.required' => 'Seleccione tiene hijos',
            'conometo_id.required' => 'Seleccione conoce metodos anticonceptivos',
            'usametod_id.required' => 'Seleccione usa metodos anticonceptivos',
            'cualmeto_id.required' => 'Seleccione cual metodo utiliza',
            'usovolun_id.required' => 'Seleccione lo usa voluntariamente',
            'i_comidas_diarias.required' => 'Seleccione comidas consume al dia',
            'racicomi_id.required' => 'Seleccione razon no consume 5 comidas al dia',
        ];
        $this->_reglasx = [
            'regisalu_id' => ['Required'],
            'sis_entidad_salud_id' => ['Required'],
            'tiensalu_id' => ['Required'],
            'tiendisc_id' => ['Required'],
            'tipodisc_id' => ['Required'],
            'ticedisc_id' => ['Required'],
            'dipeinde_id' => ['Required'],
            'estagest_id' => ['Required'],
            'estalact_id' => ['Required'],
            'probsalu_id' => ['Required'],
            'consmedi_id' => ['Required'],
            'tienhijo_id' => ['Required'],
            'conometo_id' => ['Required'],
            'usametod_id' => ['Required'],
            'cualmeto_id' => ['Required'],
            'usovolun_id' => ['Required'],
            'i_comidas_diarias' => ['Required'],
            'racicomi_id' => ['Required'],
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

        switch($dataxxxx['estagest_id']){
            case 227:
            $this->_mensaje['i_numero_semanas.required'] ='Escriba el número de semanas';
            $this->_reglasx['i_numero_semanas']='required';
            break;
        }

        switch($dataxxxx['estalact_id']){
            case 227:
            $this->_mensaje['i_numero_meses.required'] ='Escriba el número de meses';
            $this->_reglasx['i_numero_meses']='required';
            break;
        }

        switch($dataxxxx['tienhijo_id']){
            case 227:
            $this->_mensaje['i_numero_hijos.required'] ='Escriba el número de hijos';
            $this->_reglasx['i_numero_hijos']='required';
            break;
        }

        switch($dataxxxx['probsalu_id']){
            case 227:
            $this->_mensaje['i_prm_problema_salud_id.required'] ='Escriba el problema de salud';
            $this->_reglasx['i_prm_problema_salud_id']='required';
            break;
        }

        switch($dataxxxx['consmedi_id']){
            case 227:
            $this->_mensaje['s_cual_medicamento.required'] ='Escriba el nombre del medicamento';
            $this->_reglasx['s_cual_medicamento']='required';
            break;
        }

        if ($dataxxxx['d_puntaje_sisben'] == ''){
            $this->_mensaje['tiensalu_id.required'] ='Seleccione porqué no tiene Sisben';
            $this->_reglasx['tiensalu_id']='required';
        }

    }
    }