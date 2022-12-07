<?php

namespace App\Http\Requests\Acciones\Individuales\Salud;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VOdontologiaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'upi_id.required'=>'Seleccione la UPI de atención',
            'upiorigen_id.required'=>'Seleccione la UPI de origen',
            'consulta_id.required'=>'Seleccione el tipo de consulta',
            'fecha.required'=>'Ingrese la fecha de diligenciamiento',
            'valora_id.required'=>'Seleccione la tipo de valoracion',
           
            ];
        $this->_reglasx = [
            'upi_id' => 'required',
            'upiorigen_id' => 'required',
            'fecha' => 'required',
            'consulta_id' => 'required',
            'valora_id' => 'required',
      
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






