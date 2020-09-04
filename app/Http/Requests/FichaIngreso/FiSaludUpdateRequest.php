<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiSaludUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_regimen_salud_id.required' => 'Seleccione régimen salud',
            'sis_entidad_salud_id.required' => 'Seleccione entidad  / régimen',
            'i_prm_tiene_sisben_id.required' => 'Seleccione tiene sisben',
            'i_prm_tiene_discapacidad_id.required' => 'Seleccione tiene discapacidad',
            'i_prm_tipo_discapacidad_id.required' => 'Seleccione tipo discapacidad',
            'i_prm_tiene_cert_discapacidad_id.required' => 'Seleccione tiene certificado discapacidad',
            'i_prm_disc_perm_independencia_id.required' => 'Seleccione discapacidad permite independencia',
            'i_prm_esta_gestando_id.required' => 'Seleccione se encuentra en estado gestación',
            'i_prm_esta_lactando_id.required' => 'Seleccione se encuentra lactando',
            'i_prm_tiene_problema_salud_id.required' => 'Seleccione tiene problemas de salud',
            'i_prm_consume_medicamentos_id.required' => 'Seleccione consume medicamentos de forma permanente',
            'i_prm_tiene_hijos_id.required' => 'Seleccione tiene hijos',
            'i_prm_conoce_metodos_id.required' => 'Seleccione conoce metodos anticonceptivos',
            'i_prm_usa_metodos_id.required' => 'Seleccione usa metodos anticonceptivos',
            'i_prm_cual_metodo_id.required' => 'Seleccione cual metodo utiliza',
            'i_prm_uso_voluntario_id.required' => 'Seleccione lo usa voluntariamente',
            'i_comidas_diarias.required' => 'Seleccione comidas consume al dia',
            'i_prm_razon_no_cinco_comidas_id.required' => 'Seleccione razon no consume 5 comidas al dia',
        ];
        $this->_reglasx = [
            'i_prm_regimen_salud_id' => ['Required'],
            'sis_entidad_salud_id' => ['Required'],
            'i_prm_tiene_sisben_id' => ['Required'],
            'i_prm_tiene_discapacidad_id' => ['Required'],
            'i_prm_tipo_discapacidad_id' => ['Required'],
            'i_prm_tiene_cert_discapacidad_id' => ['Required'],
            'i_prm_disc_perm_independencia_id' => ['Required'],
            'i_prm_esta_gestando_id' => ['Required'],
            'i_prm_esta_lactando_id' => ['Required'],
            'i_prm_tiene_problema_salud_id' => ['Required'],
            'i_prm_consume_medicamentos_id' => ['Required'],
            'i_prm_tiene_hijos_id' => ['Required'],
            'i_prm_conoce_metodos_id' => ['Required'],
            'i_prm_usa_metodos_id' => ['Required'],
            'i_prm_cual_metodo_id' => ['Required'],
            'i_prm_uso_voluntario_id' => ['Required'],
            'i_comidas_diarias' => ['Required'],
            'i_prm_razon_no_cinco_comidas_id' => ['Required'],
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
        $datosbas = FiDatosBasico::find($this->segments()[1]);
        if ($datosbas->prm_tipoblaci_id == 2323) {
            $this->_mensaje['prm_victataq_id.required'] = 'Seleccione al menos una forma de ataque';
            $this->_mensaje['prm_discausa_id.required'] = 'Seleccione al menos una causa de discapacidad';
            $this->_reglasx['prm_victataq_id'] = ['required'];
            $this->_reglasx['prm_discausa_id'] = ['required'];
        }
        switch($dataxxxx['i_prm_esta_gestando_id']){
            case 227:
            $this->_mensaje['i_numero_semanas.required'] ='Escriba el número de semanas';
            $this->_reglasx['i_numero_semanas']='required';
            break;
        }

        switch($dataxxxx['i_prm_esta_lactando_id']){
            case 227:
            $this->_mensaje['i_numero_meses.required'] ='Escriba el número de meses';
            $this->_reglasx['i_numero_meses']='required';
            break;
        }

        switch($dataxxxx['i_prm_tiene_hijos_id']){
            case 227:
            $this->_mensaje['i_numero_hijos.required'] ='Escriba el número de hijos';
            $this->_reglasx['i_numero_hijos']='required';
            break;
        }

        switch($dataxxxx['i_prm_tiene_problema_salud_id']){
            case 227:
            $this->_mensaje['i_prm_problema_salud_id.required'] ='Escriba el problema de salud';
            $this->_reglasx['i_prm_problema_salud_id']='required';
            break;
        }

        switch($dataxxxx['i_prm_consume_medicamentos_id']){
            case 227:
            $this->_mensaje['s_cual_medicamento.required'] ='Escriba el nombre del medicamento';
            $this->_reglasx['s_cual_medicamento']='required';
            break;
        }

        if ($dataxxxx['d_puntaje_sisben'] == ''){
            $this->_mensaje['i_prm_tiene_sisben_id.required'] ='Seleccione porqué no tiene Sisben';
            $this->_reglasx['i_prm_tiene_sisben_id']='required';
        }

    }
    }
