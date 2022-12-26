<?php

namespace App\Http\Requests\Acciones\Individuales\Emprender;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EgresoSeguimientoRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'consul_id.required'=>'Indique si se realizó Consulta Del Proceso Del NNAJ En Simi',
            'verifi_id.required'=>'Indique si se realizó Verificación De Historia Social',
            'contact_id.required'=>'Indique si se realizó contacto teléfonico',
            'contact_id.required'=>'Indique si se realizó contacto teléfonico',
            'observconsu.required_if'=>'Digite las observaciones',
            'observerifi.required_if'=>'Digite las observaciones',
            'observemp.required_if'=>'Digite las observaciones',
            'emprende_id.required'=>'Indique si tiene algun emprendimiento',
            'motivoe_id.required'=>'Seleccione el motivo de egreso',
            'numcontac.required_if'=>'Digite el numero de contacto',
            'persocpntac.required_if'=>'Digite el nombre de la persona que contacto',
            'parent_id.required_if'=>'Seleccione cual es el parentesco',
            'conflicto_id.required_if'=>'¿Es usted Joven en presunto conflicto con la ley?',
     
           
            ];
        $this->_reglasx = [
            'consul_id' => 'required',
            'observconsu' => 'required_if:observconsu,227',
            'verifi_id' => 'required',
            'observerifi' => 'required_if:verifi_id,227',
            'contact_id' => 'required',
            'motivoe_id' => 'required',
            'conflicto_id' => 'required',
            'emprende_id' => 'required',
            'observemp' => 'required_if:emprende_id,227',
            'numcontac' => 'required_if:contact_id,227',
            'persocpntac' => 'required_if:contact_id,227',
            'parent_id' => 'required_if:contact_id,227',
      
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






