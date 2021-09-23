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
     * Get the validation rules that Apply to the request.
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
        $responsa = AgResponsable::find($this->segments()[2]);
        $responsa = AgResponsable::where('ag_actividad_id', $responsa->ag_actividad_id)
            ->where('i_prm_responsable_id', 1770)
            ->whereNotIn('id', [$responsa->id])
            ->first();
        if (isset($responsa->id)&&$this->i_prm_responsable_id==1770) {
            $this->_mensaje['yarespon.required'] = 'La actividad ya cuenta con un responsable';
            $this->_reglasx['yarespon'] = 'required';
        }

    }
}
