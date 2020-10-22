<?php

namespace App\Http\Requests\Csd;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdResidenciaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_piso_id.required'=>'Seleccione el tipo de piso',
            'prm_muro_id.required'=>'Seleccione el tipo de muro',
            'prm_higiene_id.required'=>'Seleccione el tipo de higiene',
            'prm_ventilacion_id.required'=>'Seleccione el tipo de ventilacion',
            'prm_iluminacion_id.required'=>'Seleccione el tipo de iluminacion',
            'prm_orden_id.required'=>'Seleccione el tipo de orden',
            'ambientes.required'=>'Seleccione al menos un ambiente',
            

          ];
        $this->_reglasx = [
            'telefono_uno' => 'nullable|string|max:120',
            'telefono_dos' => 'nullable|string|max:120',
            'telefono_tres' => 'nullable|string|max:120',
            'email' => 'nullable|email|max:120',
            'prm_piso_id' => 'required|exists:parametros,id',
            'prm_muro_id' => 'required|exists:parametros,id',
            'prm_higiene_id' => 'required|exists:parametros,id',
            'prm_ventilacion_id' => 'required|exists:parametros,id',
            'prm_iluminacion_id' => 'required|exists:parametros,id',
            'prm_orden_id' => 'required|exists:parametros,id',
            'ambientes' => 'required|array',
            'comparte' => 'required|array',
            'numerocamas' => 'required|exists:parametros,id',         
            'prm_hacinam_id' => 'required|exists:parametros,id',      
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

        }
}
