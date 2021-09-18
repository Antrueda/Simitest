<?php

namespace app\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiContactoUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    
    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_tipo_contacto_id.required' => 'Seleccione forma de contacto',
            'i_prm_aut_tratamiento_id.required' => 'Seleccione autorización tratamiento de datos',
        ];
        $this->_reglasx = [
            'i_prm_tipo_contacto_id' => ['Required'],
            'i_prm_aut_tratamiento_id' => ['Required'],
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

        switch($dataxxxx['i_prm_tipo_contacto_id']){
            case 813:
            $this->_mensaje['s_contacto_condicion.required'] ='Escriba el contacto por condición';
            $this->_reglasx['s_contacto_condicion']='required';
            break;

            case 814:
            $this->_mensaje['i_prm_contacto_opcion_id.required'] ='Seleccione el contacto por opción';
            $this->_reglasx['i_prm_contacto_opcion_id']='required';
            break;

            case 814:
            $this->_mensaje['s_entidad_remite.required'] ='Escriba la entidad que remite';
            $this->_reglasx['s_entidad_remite']='required';
            $this->_mensaje['d_fecha_remite_id.required'] ='Escriba la fecha de remisión';
            $this->_reglasx['d_fecha_remite_id']='required';
            $this->_mensaje['i_prm_motivo_contacto_id.required'] ='Seleccione el motivo del contacto';
            $this->_reglasx['i_prm_motivo_contacto_id']='required';
            break;
        }
        
    }
    }