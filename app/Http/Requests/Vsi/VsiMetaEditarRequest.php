<?php

namespace App\Http\Requests\Vsi;

use App\Models\sicosocial\VsiMeta;
use Illuminate\Foundation\Http\FormRequest;

class VsiMetaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'meta.required' => 'Ingrese la meta',
        ];
        $this->_reglasx = [
            'meta' => 'required|string|max:120'
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
        $registro = VsiMeta::select('vsi_metas.meta')
        ->join('vsis', 'vsi_metas.vsi_id', '=', 'vsis.id')
        ->where('vsis.id', $this->padrexxx) 
        ->where('vsi_metas.meta', $this->meta)
        ->first();

    if (isset($registro)) {
        $this->_mensaje['existexx.required'] = 'La meta ya existe';
        $this->_reglasx['existexx'] = ['Required',];
    }
    }
}
