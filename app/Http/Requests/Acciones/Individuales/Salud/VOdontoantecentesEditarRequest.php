<?php

namespace App\Http\Requests\Acciones\Individuales\Salud;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VOdontoantecentesEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'trata_id.required'=>'¿Esta usted bajo tratamiento médico?',
            'alergia_id.required'=>'¿Alérgico a algún medicamento?',
            'sangra_id.required'=>'¿Sangra excesivamente al cortarse?',
            'anemia_id.required'=>'Padece de anemia, leucemia. Hemofilia',
            'gestia_id.required'=>'¿Se encuentra en estado de gestación?',
            'fuma_id.required'=>'¿Fuma?',
            'cardio_id.required'=>'¿Tiene problemas Cardiacos?',
            'herpes_id.required'=>'¿Sufre de herpes o aftas recurrentes?',
            'encia_id.required'=>'Sangrado de encías',
            'muerde_id.required'=>'¿Se muerde uñas o labios?',
            'enfactu_id.required'=>'Indique si tiene alguna enfermerdad actualmente',
            'hepati_id.required'=>'Hepatitis',
            'tens_id.required'=>'Tensión arterial alta',
            'vih_id.required'=>'VIH',
            'fieb_id.required'=>'Fiebre reumatica',
            'asma_id.required'=>'Asma',
            'diabe_id.required'=>'Diabetes',
            'ulcer_id.required'=>'Ulcera gástrica',
            'toma_id.required'=>'¿Toma algun Medicamento?',
            'limit_id.required'=>'Limitación al abrir o ruidos articulares',
            'apret_id.required'=>'Apretamiento dentario',
            'resta_id.required'=>'Restauración protesica',
            'respir_id.required'=>'Respiración bucal',
            'pato_id.required'=>'Patología de Tiroides',
            'tuber_id.required'=>'Tuberculosis',
            
            
           
        
            ];
        $this->_reglasx = [
            'trata_id' => 'required',
            'sangra_id' => 'required',
            'alergia_id' => 'required',
            'encia_id' => 'required',
            'anemia_id' => 'required',
            'gestia_id' => 'required',
            'fuma_id' => 'required',
            'herpes_id' => 'required',
            
            'cardio_id' => 'required',
            'actutxt' => 'nullable',
            'cualtxt' => 'nullable',
            'medic_id' => 'nullable',
            'vih_id' => 'required',
            'enfactu_id' => 'required',
            'tens_id' => 'required',
            'muerde_id' => 'required',
            'hepati_id' => 'required',
            'asma_id' => 'nullable',
            'apret_id' => 'nullable',
            'medic_id' => 'nullable',
            'fieb_id' => 'required',
            'diabe_id' => 'required',
            'toma_id' => 'required',
            'limit_id' => 'required',
            'tuber_id' => 'required',
            'resta_id' => 'required',
            'respir_id' => 'required',
            'pato_id' => 'required',
            
            
           
         
           

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
          
         
        }
    }






