<?php

namespace App\Http\Requests\Acciones\Individuales\Salud;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VsmedicinaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'upi_id.required'=>'Seleccione la UPI de atención',
            'upiorigen_id.required'=>'Seleccione la UPI de origen',
            'fecha.required'=>'Ingrese la fecha de diligenciamiento',
            'consul_id.required'=>'Seleccione la tipo de consulta',
            'poblaci_id.required'=>'Seleccione el tipo de población',
            'remico_id.required'=>'Seleccione el tipo de remisión interinstitucional',
            'entidad_id.required'=>'Seleccione la entidad de salud',
            'afili_id.required'=>'Seleccione el estado de de afiliación de salud',
            'remiesp_id.required_if'=>'Seleccione la especialidad',

            
           
        
            ];
        $this->_reglasx = [
            'upi_id' => 'required',
            'fecha' => 'required',
            'upiorigen_id' => 'required',
            'afili_id' => 'required',
            'poblaci_id' => 'required',
            'entidad_id' => 'required',
            'afili_id' => 'required',
            'remico_id' => 'required',
            'remisal_id' => 'nullable',
            'remigen_id' => 'nullable',
            'recomenda' => 'nullable',
            'motivoval' => 'nullable',
            'remiint_id' => 'nullable',
            'remiesp_id' => 'required_if:remiint_id,1',
            
            
           
         
           

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




