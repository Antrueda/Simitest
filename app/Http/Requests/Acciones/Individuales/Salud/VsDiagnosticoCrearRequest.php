<?php

namespace App\Http\Requests\Acciones\Individuales\Salud;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VsDiagnosticoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'diag_id.required'=>'Seleccione el diagnostico',
            'codigo.required'=>'Ingrese el codigo ',
            'esta_id.required'=>'Seleccione el estado del diagnostico',
         
            ];
        $this->_reglasx = [
            'diag_id' => 'required',
            'codigo' => 'required',
            'esta_id' => 'required',
            'concepto' => 'nullable',
            
           
         
           

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




