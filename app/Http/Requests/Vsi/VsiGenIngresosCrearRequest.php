<?php

namespace App\Http\Requests\Vsi;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sicosocial\Vsi;
use Illuminate\Foundation\Http\FormRequest;

class VsiGenIngresosCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_actividad_id.required' => 'Seleccione un tipo de actividad',
            'trabaja.required_if' => 'Digite el tipo de actividad formal',
            'prm_informal_id.required_if'=>'Seleccione el tipo de actividad informal',
            'prm_otra_id.required_if'=>'Seleccione que otra tipo de actividad',
            'prm_otra_id.required_if'=>'Seleccione que otra tipo de actividad',
            'prm_no_id.required_if'=>'Indique por qué no genera ingresos ',
            'cuanto.required_if'=>'Hace cuanto no genera ingresos ',
            'prm_periodo_id.required_if'=>'En que periodo de tiempo ',
            'prm_jornada_id.required_if'=>'En que jornada genera ingresos',
            'jornada_entre.required_unless'=>'¿De?',
            'prm_jor_entre_id.required_unless'=>'¿AM/PM?',
            'jornada_a.required_unless'=>'¿Hasta?',
            'prm_jor_a_id.required_unless'=>'¿AM/PM?',
            'prm_frecuencia_id.required_unless'=>'Seleccione con que frecuencia recibe ingreso',
            'aporte.required_unless'=>'Total de aportes mensuales',
            'prm_laboral_id.required_if'=>'Indique el tipo de relacion laboral',
            'prm_aporta_id.required_unless'=>'Indique si realiza algun aporte mensual',
            'porque.required_if'=>'Indique si por qué aporta',
            'cuanto_aporta.required_if'=>'Indique cuanto aporta',
            'dias.required_unless'=>'Indique en que días labora',

        ];
        $this->_reglasx = [
            'prm_actividad_id' => 'required|exists:parametros,id',
            'trabaja' => 'required_if:prm_actividad_id,626|max:120',
            'prm_informal_id' => 'required_if:prm_actividad_id,627',
            'prm_otra_id' => 'required_if:prm_actividad_id,628',
            'prm_no_id' => 'required_if:prm_actividad_id,853',
            'cuanto' => 'required_if:prm_no_id,711',
            'prm_periodo_id' => 'required_if:prm_no_id,711',
            'prm_jornada_id'=> 'required_if:prm_actividad_id,853|required_if:prm_no_id,711',
            'jornada_entre' => 'required_unless:prm_actividad_id,853',
            'prm_jor_entre_id' => 'required_unless:prm_actividad_id,853',
            'jornada_a' => 'required_unless:prm_actividad_id,853',
            'prm_jor_a_id' => 'required_unless:prm_actividad_id,853',
            'prm_frecuencia_id' => 'required_unless:prm_actividad_id,853',
            'aporte' => 'required_unless:prm_actividad_id,853',
            'prm_laboral_id' => 'required_if:prm_actividad_id,626',
            'prm_aporta_id' => 'required_unless:prm_actividad_id,853',
            'porque' => 'required_if:prm_aporta_id,227',
            'cuanto_aporta' => 'required_if:prm_aporta_id,227',
            'expectativa' => 'nullable|string|max:4000',
            'descripcion' => 'nullable|string|max:4000',
            'dias' => 'required_unless:prm_actividad_id,853',
            'quienes' => 'nullable|array',
            'labores' => 'nullable|array',
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
        return $this->_reglasx;
    }

    public function validar()
    {
        
 
 

    }
}
