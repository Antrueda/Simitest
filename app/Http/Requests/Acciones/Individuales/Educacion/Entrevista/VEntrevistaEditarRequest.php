<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\Entrevista;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VEntrevistaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'observacion.required'=>'Digite las observaciones sobre el consumo de sustancias',
            'prm_consumo.required'=>'Seleccione las dinámicas de consumo de sustancias psicoactivas',
            'fecha.required'=>'Ingrese la fecha de diligenciamiento',
            'poblaci_id.required'=>'Seleccione el tipo de población',
            'prm_habitos.required'=>'Seleccione los habitos y rutinas',
            'prm_patrone.required'=>'Seleccione los patrones de sueño',
            'prm_autocui.required'=>'Seleccione el autocuidado',
            'prm_instrum.required'=>'Seleccione las actividades instrumentales',
            'prm_remite.required'=>'Seleccione el autocuidado',
            'anteocupaci.required'=>'Digite los antecedentes ocupacionales',
            'anteotiempo.required'=>'Digite los antecedentes tiempo libre',
            'prospeccion.required'=>'Digite las observaciones familiares',
            'osexualidad.required'=>'Digite obvservaciones de la sexualidad y relaciones de pareja',
            'obsefamilia.required'=>'Digite las observaciones familiares',
            'observacio2.required'=>'Digite la obsrervación',
            'conceptoocu.required'=>'Digite el concepto ocupacional',
            'intra.required_if'=>'Seleccione el area',
            'upi_id.required'=>'Seleccione la upi',
            'intertext.required_if'=>'Digite la entidad interinstitucional',


           
        
            ];
        $this->_reglasx = [
            'anteclinicos' => 'required',
            'fecha' => 'required',
            'prm_consumo' => 'required',
            'observacion' => 'required',
            'prm_autocui' => 'required',
            'prm_habitos' => 'required',
            'prm_instrum' => 'required',
            'prm_patrone' => 'required',
            'anteocupaci' => 'required',
            'anteotiempo' => 'required',
            'prospeccion' => 'required',
            'obsefamilia' => 'required',
            'observacio2' => 'required',
            'osexualidad' => 'required',
            'conceptoocu' => 'required',
            'prm_remite' => 'nullable',
            'intra' => 'required_if:prm_remite,2725',
            'areas' => 'required',
            'upi_id' => 'required',
            'intertext' => 'required_if:prm_remite,2726',
            
            
           
         
           

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





