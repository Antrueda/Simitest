<?php

namespace App\Http\Requests\Vsi;

use App\Models\sicosocial\VsiPotencialidad;
use Illuminate\Foundation\Http\FormRequest;

class VsiPotencialidadEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'potencialidad.required' => 'Ingrese la potencialidad',
        ];
        $this->_reglasx = [
            'potencialidad' => 'required|string|max:120'
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
        $registro = VsiPotencialidad::select('vsi_potencialidads.potencialidad')
        ->join('vsis', 'vsi_potencialidads.vsi_id', '=', 'vsis.id')
        ->where('vsis.id', $this->padrexxx) 
        ->where('vsi_potencialidads.potencialidad', $this->potencialidad)
        ->first();
   
    if (isset($registro)) {
        $this->_mensaje['existexx.required'] = 'La pontencialidad ya existe';
        $this->_reglasx['existexx'] = ['Required',];
    }
    }
}
