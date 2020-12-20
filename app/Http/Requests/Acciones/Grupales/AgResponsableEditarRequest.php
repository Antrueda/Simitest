<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Models\Acciones\Grupales\AgResponsable;
use Illuminate\Foundation\Http\FormRequest;
class AgResponsableEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'user_id.required' => 'Seleccione un responsable',
            'i_prm_responsable_id.required' => 'Seleccione si es responsable o no',
            ];
        $this->_reglasx = [
            'user_id' =>['required',],
            'i_prm_responsable_id' =>['required',],
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
        /**
         * indentificar si ya tiene un responsable diferente al que se está editadndo
         */
        $responsa=AgResponsable::where('ag_actividad_id',$this->segments()[1])
        ->where('i_prm_responsable_id',1770)
        ->whereNotIn('id',[$this->segments()[4]])
        ->first();
        if(isset($responsa->id)){
            if ($this->i_prm_responsable_id == $responsa->i_prm_responsable_id) {
                $this->_mensaje['yarespon.required'] = 'La actividad ya cuenta con un responsable';
                $this->_reglasx['yarespon'] = 'required';
            }
        }
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        
    }
}
