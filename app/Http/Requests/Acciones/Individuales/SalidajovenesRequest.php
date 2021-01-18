<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class SalidajovenesRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'hora_salida.required'=>'Indique la hora de salida',
            
            'retorna_id.required'=>'Ingrese el primer apellido',
            'fecharetorno.required_if'=>'Indique la fecha de retorno',
            'horaretorno.required_if'=>'Indique la hora de retorno',
            'razones.required'=>'Ingrese la dirección',
            
            ];
        $this->_reglasx = [
            'hora_salida' => 'required|exists:parametros,id',
            'retorna_id' => 'required',
            'fecharetorno' => 'required_if:retorna_id,227',
            'horaretorno' => 'required_if:retorna_id,227',
            'razones' => 'required',
                        
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
     * Get the validation rules that apply to the request.
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
            $nnajxxxx = FiDatosBasico::find($this->sis_nnaj_id);
            $edad = $nnajxxxx->nnaj_nacimi->Edad;
    
            if ($edad < 18) { //Mayor de edad
                $this->_mensaje['autoriza_id.required'] = 'Seleccione Autorización de salida';
                $this->_reglasx['autoriza_id'] = 'Required';
            }
        }
}


