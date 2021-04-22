<?php

namespace App\Http\Requests\Csd;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdConclusionesCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'conclusiones.required'=> 'Ingrese una conclusión',
            'persona_nombre.required'=> 'Ingrese el nombre de la persona que diligencio la consulta',
            'persona_doc.required'=> 'Ingrese el numero de documento de la persona que diligencio la consulta',
            'persona_parent_id.required'=> 'Seleccione el parentezco con el NNAJ',
            'user_doc1_id.required'=> 'Seleccione el funcionario responsable',
            ];
        $this->_reglasx = [
            'conclusiones'      => 'required|string|max:4000',
            'persona_nombre'    => 'required|string|max:120',
            'persona_doc'       => 'required|string|max:10',
            'persona_parent_id' => 'required|exists:parametros,id',
            'user_doc1_id'    => 'required|exists:users,id',
            'user_doc2_id'    => 'nullable|exists:users,id',
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
            if($this->user_doc1_id==$this->user_doc2_id){
                $this->_mensaje['existexx.required'] = 'No se puede registrar el mismo funcionario';
                $this->_reglasx['existexx'] = ['Required',];
            } 

        }
}
