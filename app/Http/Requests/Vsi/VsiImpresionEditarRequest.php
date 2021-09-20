<?php

namespace app\Http\Requests\Vsi;

use app\Models\sicosocial\Vsi;
use Illuminate\Foundation\Http\FormRequest;

class VsiImpresionEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [

        ];
        $this->_reglasx = [
            'concepto' => 'required|string|max:4000',
            'prm_ingreso_id' => 'nullable|exists:parametros,id',
            'porque' => 'nullable|string|max:4000',
            'cual' => 'nullable|string|max:120',
            'redes' => 'nullable|array'
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
        $nnajxxxx = Vsi::find($this->segments()[2]);
   
        $edad = $nnajxxxx->nnaj->fi_datos_basico->nnaj_nacimi->Edad;

        if ($edad < 18) { //Mayor de edad
            $this->_mensaje['prm_ingreso_id.required'] = 'Seleccione si considera pertinente el Ingreso del NNA a IDIPRON';
            $this->_reglasx['prm_ingreso_id'] = 'Required';
            $this->_mensaje['porque.required'] = '¿Por que?';
            $this->_reglasx['porque'] = 'Required';
         
        }
    }

    }

