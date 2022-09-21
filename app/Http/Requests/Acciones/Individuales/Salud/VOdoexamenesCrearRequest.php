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
            'labios_id.required'=>'Seleccione la UPI de atención',
            'lengua_id.required'=>'Seleccione el tipo de consulta',
            'pisob_id.required'=>'Ingrese la fecha de diligenciamiento',
            'paladar_id.required'=>'Seleccione la tipo de valoracion',
            'mucosa_id.required'=>'Seleccione la tipo de valoracion',
           
            ];
        $this->_reglasx = [
            'labios_id' => 'required',
            'lengua_id' => 'required',
            'pisob_id' => 'required',
            'paladar_id' => 'required',
            'mucosa_id' => 'required',
            'descripcion' => 'required',
      
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






