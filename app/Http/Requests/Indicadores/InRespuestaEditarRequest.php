<?php

namespace App\Http\Requests\Indicadores;

use App\Models\Indicadores\InRespu;
use Illuminate\Foundation\Http\FormRequest;

class InRespuestaEditarRequest extends FormRequest
{
   private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_respuesta_id.required' => 'Seleccione una una respuesta',
        ];
        $this->_reglasx = [
            'prm_respuesta_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            
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
        $registro=InRespu::where('prm_respuesta_id',$this->prm_respuesta_id)->where('in_doc_pregunta_id',$this->in_doc_pregunta_id)->first();
        if(isset($registro->id) && $this->segments()[2]!=$registro->id){
            $this->_mensaje['existexx.required']='La pregunta y la respuesta ya estan asociadas';
            $this->_reglasx['existexx']='required';
        }
    }
}
