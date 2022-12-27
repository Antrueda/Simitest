<?php

namespace App\Http\Requests\Acciones\Individuales\Sociolegal;


use App\Models\fichaIngreso\FiDatosBasico;
use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Foundation\Http\FormRequest;

class CasoJurEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'upi_id.required'=>'Seleccione la UPI de atención',
            'upiorigen_id.required'=>'Seleccione la UPI de origen',
            'fecha.required'=>'Ingrese la fecha de diligenciamiento',
            'i_prm_ha_estado_pard_id.required'=>'Seleccione si cuenta con pard',
            'num_sim.required'=>'Seleccione la tipo de consulta',
            'centro_id.required'=>'Seleccione el Centro Zonal',
//            'remico_id.required'=>'Seleccione el tipo de remisión Interinstitucional',
            'censec_id.required'=>'Seleccione la Centro Zonal Secundario',
            'remiesp_id.required_if'=>'Seleccione la especialidad',
            'tipoc_id.required'=>'Seleccione el tipo de caso',
            'temac_id.required'=>'Seleccione el tema de caso',
            'prm_rama_id.required'=>'¿El caso registra en rama Judicial?',
            'prm_juzgado.required_if'=>'¿Que juzgado atiende el proceso?',
            'num_proceso.required_if'=>'Digite el numero del proceso',
            'estacaso.required'=>'Seleccione el estado del caso',
            'prm_solicita_id.required'=>'Seleccione la persona que solicita la asesoria',
            'prm_sujeto.required'=>'Seleccione el tipo de sujeto',
            'consultaca.required'=>'Digite consulta de caso',
            'asesoriaca.required'=>'Digite asesoria de caso',
            
            
           
        
            ];
            //            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],
        $this->_reglasx = [
            'upi_id' => 'required',
            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'upiorigen_id' => 'required',
            'i_prm_ha_estado_pard_id' => 'required',
            'num_sim' => 'nullable',
            'centro_id' => 'nullable',
            'censec_id' => 'nullable',
            'checkbox1' => 'nullable',
            'prm_rama_id' => 'required',
            'num_proceso' =>  'required_if:prm_rama_id,227',
            'prm_juzgado' =>  'required_if:prm_rama_id,227',
            'prm_solicita_id' => 'required',
            'tipoc_id' => 'required',
            'temac_id' => 'required',
            'telfapo2' => 'nullable',
            'prm_sujeto' => 'required',
            'correoapo' => 'nullable',
            'consultaca' => 'required',
            'asesoriaca' => 'required',
            'estacaso' => 'required',
            
            
            
           
         
           

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

        if ($this->fecha != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha
            ]);
            $this->_reglasx['fecha'][] = new TiempoCargueRule([
                'puedexxx' => $puedexxx
            ]);
        }
        $this->validar();
        return $this->_reglasx;    }

        public function validar()
        {
            $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
            $nnajxxxx = FiDatosBasico::where('sis_nnaj_id',$this->padrexxx->id)->first();
   
   
            if( $nnajxxxx!=null){
            $edad = $nnajxxxx->nnaj_nacimi->Edad;

                
            if ($edad < 18) { //Mayor de edad
                $this->_mensaje['prm_doc_id.required'] = 'Seleccione el tipo de documento del acompañante';
                $this->_reglasx['prm_doc_id'] = 'Required';
                $this->_mensaje['nom1_autorizado.required'] = 'Ingrese el nombre del acompañante';
                $this->_reglasx['nom1_autorizado'] = 'Required';
                $this->_mensaje['ape1_autorizado.required'] = 'Ingrese el apellido del acompañante';
                $this->_reglasx['ape1_autorizado'] = 'Required';
                $this->_mensaje['prm_parentezco_id.required'] = 'Seleccione el parentesco';
                $this->_reglasx['prm_parentezco_id'] = 'Required';
                $this->_mensaje['doc_autorizado.required'] = 'Ingrese el numero de documento';
                $this->_reglasx['doc_autorizado'] = 'Required';
                $this->_mensaje['sis_municipio_id.required'] = 'Selecccione el municipio';
                $this->_reglasx['sis_municipio_id'] = 'Required';
                $this->_mensaje['localidad_id.required'] = 'Selecccione la localidad';
                $this->_reglasx['localidad_id'] = 'Required';
                $this->_mensaje['upz_id.required'] = 'Selecccione la UPZ ';
                $this->_reglasx['upz_id'] = 'Required';
                $this->_mensaje['sis_upzbario_id.required'] = 'Selecccione el barrio';
                $this->_reglasx['sis_upzbario_id'] = 'Required';

                }
            }
            if($this->checki==1){
                $this->_reglasx['i_prm_tipo_duerme_id'] = 'Required';
                $this->_mensaje['i_prm_tipo_duerme_id.required'] = 'Seleccione Tipo de residencia';
                $this->_reglasx['sis_upzbarri_id'] = 'Required';
                $this->_mensaje['sis_upzbarri_id.required'] = 'Seleccione el barrio';
                $this->_reglasx['sis_upz_id'] = 'Required';
                $this->_mensaje['sis_upz_id.required'] = 'Seleccione UPZ';

            
    }
    }
}






