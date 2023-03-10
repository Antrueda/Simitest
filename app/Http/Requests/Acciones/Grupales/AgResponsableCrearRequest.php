<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Models\Acciones\Grupales\AgResponsable;
use Illuminate\Foundation\Http\FormRequest;

class AgResponsableCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_responsable_id.required' => 'Seleccione si es responsable o no',
            'user_id.required' => 'Seleccione un responsable',
        ];
        $this->_reglasx = [
            'i_prm_responsable_id' => ['required',],
            'user_id' => ['required',],
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
         * indentificar si ya tiene un responsable
         */
        //$responsa = AgResponsable::find($this->segments()[]);
        
        $responsa = AgResponsable::where('ag_actividad_id', $this->segments()[0])
            ->where('i_prm_responsable_id', 1770)
            ->whereNotIn('id', [$this->user_id])
            ->first();
            if (isset($responsa->id)&&$this->i_prm_responsable_id==1770) {
            $this->_mensaje['yarespon.required'] = 'La actividad ya cuenta con un responsable';
            $this->_reglasx['yarespon'] = 'required';
        }
    }
}
