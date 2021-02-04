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
            'prm_regisalu_id.required' => 'Seleccione régimen salud',
            'sis_entidad_salud_id.required' => 'Seleccione entidad  / régimen',
            'prm_tiensisb_id.required' => 'Seleccione tiene sisben',
            'prm_tiendisc_id.required' => 'Seleccione tiene discapacidad',
            'prm_tipodisca_id.required' => 'Seleccione tipo discapacidad',
            'prm_tiecedis_id.required' => 'Seleccione tiene certificado discapacidad',
            'prm_dispeind_id.required' => 'Seleccione discapacidad permite independencia',
            'prm_tieprsal_id.required' => 'Seleccione tiene problemas de salud',
            'prm_consmedi_id.required' => 'Seleccione consume medicamentos de forma permanente',
            'prm_tienhijo_id.required' => 'Seleccione tiene hijos',
            'prm_conometo_id.required' => 'Seleccione conoce metodos anticonceptivos',
            'prm_usametod_id.required' => 'Seleccione usa metodos anticonceptivos',
            'prm_cualmeto_id.required' => 'Seleccione cual metodo utiliza',
            'prm_usovolun_id.required' => 'Seleccione lo usa voluntariamente',
            'i_comidas_diarias.required' => 'Seleccione comidas consume al dia',
            'prm_razcicom_id.required' => 'Seleccione razon no consume 5 comidas al dia',
        ];
        $this->_reglasx = [
            'prm_regisalu_id' => ['Required'],
            'sis_entidad_salud_id' => ['Required'],
            'prm_tiensisb_id' => ['Required'],
            'prm_tiendisc_id' => ['Required'],
            'prm_tipodisca_id' => ['Required'],
            'prm_tiecedis_id' => ['Required'],
            'prm_dispeind_id' => ['Required'],
            'prm_tieprsal_id' => ['Required'],
            'prm_consmedi_id' => ['Required'],
            'prm_tienhijo_id' => ['Required'],
            'prm_conometo_id' => ['Required'],
            'prm_usametod_id' => ['Required'],
            'prm_cualmeto_id' => ['Required'],
            'prm_usovolun_id' => ['Required'],
            'i_comidas_diarias' => ['Required'],
            'prm_razcicom_id' => ['Required'],
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
         if ($datosbas->prm_estrateg_id == 2323) {
                $this->_mensaje['prm_victataq_id.required'] = 'Seleccione al menos una forma de ataque';
                $this->_mensaje['prm_discausa_id.required'] = 'Seleccione al menos una causa de discapacidad';
                $this->_reglasx['prm_victataq_id'] = ['required'];
                $this->_reglasx['prm_discausa_id'] = ['required'];
            }
        if ($datosbas->nnaj_sexo->prm_sexo_id != 20) {
            $this->_mensaje['prm_estagest_id.required'] = 'Seleccione se encuentra en estado gestación';
            $this->_reglasx['prm_estagest_id'] = 'required';
            $this->_mensaje['prm_estalact_id.required'] = 'Seleccione se encuentra lactando';
            $this->_reglasx['prm_estalact_id'] = 'required';
            switch ($dataxxxx['prm_estagest_id']) {
                case 227:
                    $this->_mensaje['i_numero_semanas.required'] = 'Escriba el número de semanas';
                    $this->_reglasx['i_numero_semanas'] = 'required';
                    break;
            }

            switch ($dataxxxx['prm_estalact_id']) {
                case 227:
                    $this->_mensaje['i_numero_meses.required'] = 'Escriba el número de meses';
                    $this->_reglasx['i_numero_meses'] = 'required';
                    break;
            }
        }
        switch ($dataxxxx['prm_tienhijo_id']) {
            case 227:
                $this->_mensaje['i_numero_hijos.required'] = 'Escriba el número de hijos';
                $this->_reglasx['i_numero_hijos'] = 'required';
                break;
        }

        switch ($dataxxxx['prm_tieprsal_id']) {
            case 227:
                $this->_mensaje['prm_probsalu_id.required'] = 'Escriba el problema de salud';
                //$this->_reglasx['prm_probsalu_id']='required';
                break;
        }

        switch ($dataxxxx['prm_consmedi_id']) {
            case 227:
                $this->_mensaje['s_cual_medicamento.required'] = 'Escriba el nombre del medicamento';
                $this->_reglasx['s_cual_medicamento'] = 'required';
                break;
        }

        if ($dataxxxx['d_puntaje_sisben'] == '') {
            $this->_mensaje['prm_tiensisb_id.required'] = 'Seleccione porqué no tiene Sisben';
            $this->_reglasx['prm_tiensisb_id'] = 'required';
        }
    }
}
