<?php

namespace App\Http\Requests\Acciones\Individuales\Salud;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VOdoexamenesCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'labios_id.required'=>'Presenta alteración en Labios',
            'lengua_id.required'=>'Presenta alteración en Lengua',
            'pisob_id.required'=>'Presenta alteración en Piso de Boca',
            'paladar_id.required'=>'Presenta alteración en Paladar_id',
            'mucosa_id.required'=>'Presenta alteración en Mucosa Yugal y labial',
           
            ];
        $this->_reglasx = [
            'labios_id' => 'required',
            'lengua_id' => 'required',
            'pisob_id' => 'required',
            'paladar_id' => 'required',
            'mucosa_id' => 'required',
            //'descripcion' => 'required',
      
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
          
            if($this->labios_id==227||$this->lengua_id==227||$this->pisob_id==227||$this->paladar_id==227||$this->mucosa_id==227){
                $this->_reglasx['descripcion'] = 'Required';
                $this->_mensaje['descripcion.required'] = 'Digite la descripción de los hallazgos';
            

            }
        }
    }






