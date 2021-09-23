<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiEnfermedadesFamiliaCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'fi_compfami_id.required' => 'Seleccione un miembro de la familia',
            'prm_recimedi_id.required' => 'Indique si recibe algún medicina',
            'prm_rectrata_id.required' => 'Indique si recibe algún tratamiento',
            's_tipo_enfermedad.required' => 'Escriba el nombre de la enfermedad',

        ];
        $this->_reglasx = [
            'fi_compfami_id' => ['required'],
            'prm_recimedi_id' => ['required'],
            'prm_rectrata_id' => ['required'],
            's_tipo_enfermedad' => ['required'],

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
        if($this->prm_recimedi_id==227){
            $this->_mensaje['s_medicamento.required'] = 'escriba el nombre del medicamento';
            $this->_reglasx['s_medicamento'] = ['required'];
        }

    }
}
