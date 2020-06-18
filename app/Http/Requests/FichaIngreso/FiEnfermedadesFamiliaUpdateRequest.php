<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiEnfermedadesFamiliaUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'fi_composicion_fami_id.required' => 'Seleccione un miembro de la familia',
            'recimedi_id.required' => 'Indique si recibe algún medicina',
            'rectrata_id.required' => 'Indique si recibe algún tratamiento',
            's_tipo_enfermedad.required' => 'Escriba el nombre de la enfermedad',
            's_medicamento.required' => 'escriba el nombre del medicamento',      
        ];
        $this->_reglasx = [
            'fi_composicion_fami_id' => ['required'],
            'recimedi_id' => ['required'],
            'rectrata_id' => ['required'],
            's_tipo_enfermedad' => ['required'],
            's_medicamento' => ['required'],  
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
