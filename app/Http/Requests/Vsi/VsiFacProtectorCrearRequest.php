<?php

namespace App\Http\Requests\Vsi;

use App\Models\sicosocial\VsiFacProtector;
use Illuminate\Foundation\Http\FormRequest;

class VsiFacProtectorCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'protector.required' => 'Ingrese el protector',
        ];
        $this->_reglasx = [
            'protector' => 'required|string|max:120'
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
      
        $registro = VsiFacProtector::select('vsi_fac_protectors.protector')
        ->join('vsis', 'vsi_fac_protectors.vsi_id', '=', 'vsis.id')
        ->where('vsis.id', $this->padrexxx) 
        ->where('vsi_fac_protectors.protector', $this->protector)
        ->first();
   
    if (isset($registro)) {
        $this->_mensaje['existexx.required'] = 'el factor protector ya existe';
        $this->_reglasx['existexx'] = ['Required',];
    }
    }
}
