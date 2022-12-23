<?php

namespace App\Http\Requests\Acciones\Individuales\Emprender;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EgresoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'upi_id.required'=>'Seleccione la UPI de atención',
            'fecha.required'=>'Ingrese la fecha de diligenciamiento',
     
           
            ];
        $this->_reglasx = [
            'upi_id' => 'required',
            'fecha' => 'required',
            'custo_id' => 'nullable',
            'parent_id' => 'nullable',
            'nom1_autorizado' => 'nullable',
            'ape1_autorizado' => 'nullable',
      
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






