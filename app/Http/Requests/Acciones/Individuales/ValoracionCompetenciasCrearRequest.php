<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
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
 
            'unidad_id.required'=>'Seleccione una unidad',
            'conocimiento.required'=>'Digite un numero del 1 al 10',
            'desempeno.required'=>'Digite un numero del 1 al 10',
            'producto.required'=>'Digite un numero del 1 al 10',
            'concepto.required'=>'Ingrese la fecha de diligenciamiento',
           
           
        
            ];
        $this->_reglasx = [
           
            'unidad_id' => 'required',
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
          

            $responsa = UniComp::select('unidad_id')->where('valora_id',$this->segments(0))->first();
            $competen = UniComp::where('unidad_id',$this->unidad_id)->where('sis_nnaj_id',$this->padrexxx->sis_nnaj_id)->get();
            //ddd($competen);
            
            if ($responsa==$this->unidad_id) {
                $this->_mensaje['yarespon.required'] = 'La unidad de aprendizaje ya se encuentra registrada';
                $this->_reglasx['yarespon'] = 'required';
            }
            if (isset($competen)) {
                foreach($competen as $value){
                    //ddd($value->concepto=="COMPETENTE");
                    if($value->concepto=="COMPETENTE"){
                    $this->_mensaje['compete.required'] = 'La unidad de aprendizaje ya se encuentra aprobada';
                    $this->_reglasx['compete'] = 'required';
                }
            }
    
            }
          
      
        }
}



