<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ValoracionCompetenciasCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'conocimiento.required'=>'Digite un numero del 1 al 10',
            'desempeno.required'=>'Digite un numero del 1 al 10',
            'producto.required'=>'Digite un numero del 1 al 10',
            'concepto.required'=>'Ingrese la fecha de diligenciamiento',
           
           
        
            ];
        $this->_reglasx = [
            
            'conocimiento' => 'required',
            'desempeno' => 'required',
            'producto' => 'required',
            'concepto' => 'required',
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



