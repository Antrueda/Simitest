<?php

namespace App\Http\Requests\Acciones\Individuales\Sociolegal;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CasoJurCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'upi_id.required'=>'Seleccione la UPI de atención',
            'upiorigen_id.required'=>'Seleccione la UPI de origen',
            'fecha.required'=>'Ingrese la fecha de diligenciamiento',
            'i_prm_ha_estado_pard_id.required'=>'Seleccione la tipo de consulta',
            'num_sim.required'=>'Seleccione la tipo de consulta',
            'centro_id.required'=>'Seleccione el tipo de población',
            'remico_id.required'=>'Seleccione el tipo de remisión Interinstitucional',
            'censec_id.required'=>'Seleccione la entidad de salud',
            'remiesp_id.required_if'=>'Seleccione la especialidad',
            'tipoc_id.required'=>'Indique si requiere certificado',
            'temac_id.required'=>'Seleccione el tipo de remisión Intrainstitucional',
            'prm_rama_id.required'=>'¿El caso registra en rama Judicial?',
            'estacaso.required'=>'Seleccione el estado del caso',
            'prm_sujeto.required'=>'Seleccione el tipo de sujeto',
            'consultaca.required'=>'Digite consulta de caso',
            'asesoriaca.required'=>'Digite asesoria de caso',

            
           
        
            ];
        $this->_reglasx = [
            'upi_id' => 'required',
            'fecha' => 'required',
            'upiorigen_id' => 'required',
            'i_prm_ha_estado_pard_id' => 'required',
            'num_sim' => 'nullable',
            'centro_id' => 'nullable',
            'censec_id' => 'nullable',
            'checkbox1' => 'nullable',
            'prm_rama_id' => 'required',
            'num_proceso' => 'nullable',
            'prm_juzgado' => 'nullable',
            'prm_solicita_id' => 'nullable',
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
                $this->_mensaje['prm_parentezco_id.required'] = 'Seleccione el parentezco';
                $this->_reglasx['prm_parentezco_id'] = 'Required';
                $this->_mensaje['doc_autorizado.required'] = 'Ingrese el numero de documento';
                $this->_reglasx['doc_autorizado'] = 'Required';

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






