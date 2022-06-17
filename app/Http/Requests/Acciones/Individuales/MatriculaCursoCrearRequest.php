<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class MatriculaCursoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_grupo.required'=>'Indique el grupo',
            'curso_id.required'=>'Seleccione el curso',
            'fecha.required'=>'Ingrese la fecha de diligenciamiento',
            'telefono.required'=>'Ingrese el teléfono',
            'prm_curso.required'=>'Ingrese el tipo de curso',
            
           
        
            ];
        $this->_reglasx = [
            'prm_grupo' => 'required',
            'fecha' => 'required',
            'curso_id' => 'required',
            'prm_curso' => 'required',
            'telefono' => 'required',
            'celular' => 'nullable',
            'celular2' => 'nullable',
            
           
         
           

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
   
            $tallerxx = MatriculaCurso::where('sis_nnaj_id',$this->padrexxx->id)->where('sis_esta_id',1)->first();
            //ddd($this->toArray());
            if( $nnajxxxx!=null){
            $edad = $nnajxxxx->nnaj_nacimi->Edad;
            //ddd($edad);
                
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
            if($this->prm_curso==2753){
                if($this->grado<11&&$this->cursado<11){
                    $this->_mensaje['menor.required'] = 'El nnaj no puede participar en un curso de larga duración';
                    $this->_reglasx['menor'] = 'Required';
                }
            }

            }
            if($tallerxx!=null){
                $this->_mensaje['existexx.required'] = 'El nnaj ya se encuentra matriculado en un grupo';
                $this->_reglasx['existexx'] = ['Required',];
            }
      
        }
}



