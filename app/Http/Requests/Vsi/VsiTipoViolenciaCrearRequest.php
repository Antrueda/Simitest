<?php

namespace app\Http\Requests\Vsi;

use app\Models\sicosocial\Pivotes\VsiTipoVio;
use Illuminate\Foundation\Http\FormRequest;

class VsiTipoViolenciaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'tipo_id.required' => 'Seleccione el tipo de violencia',
            'forma_id.required' => 'Seleccione la forma de violencia',
       
        ];
        $this->_reglasx = [
            'tipo_id' => 'required|exists:parametros,id',
            'forma_id' => 'required|exists:parametros,id',
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
        
        $registro = VsiTipoVio::select('vsi_tipo_vios.id')
        ->join('vsis', 'vsi_tipo_vios.vsi_id', '=', 'vsis.id')
        ->where('vsis.id', $this->padrexxx) 
        ->where('vsi_tipo_vios.tipo_id', $this->tipo_id)
        ->where('vsi_tipo_vios.forma_id', $this->forma_id)
        ->first();
        

    if (isset($registro->id)) {
        $this->_mensaje['existexx.required'] = 'el tipo de violencia ya existe';
        $this->_reglasx['existexx'] = ['Required',];
             }
        }
    }

