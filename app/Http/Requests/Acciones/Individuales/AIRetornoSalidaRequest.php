<?php

namespace App\Http\Requests\Acciones\Individuales;

use Illuminate\Foundation\Http\FormRequest;

class AIRetornoSalidaRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_upi_id.required' => 'Seleccione una UPI',
            'fecha.required' => 'Ingrese una fecha',
            'hora_retorno.required' => 'Seleccione una hora de retorno',
            'prm_condicion_id.required' => 'Seleccione si tiene una condicion física óptima',
            'prm_orientado_id.required' => 'Indique si esta orientado en sus tres esferas',
            'prm_enfermerd_id.required' => 'Seleccione si tiene una enfermedad general',
            'prm_brotes_id.required' => 'Seleccione si tiene brotes',
            'prm_laceracio_id.required' => 'Seleccione si tiene laceraciones o hematomas',
            'user_doc1_id.required' => 'Quien recibe al nna',
            
        ];
        $this->_reglasx = [
            'prm_upi_id'     => 'required|exists:sis_depens,id',
            'fecha'             => 'required|date',
            'hora_retorno'   => 'required',
            'descripcion'    => 'required|string|max:4000',
            'observaciones'  => 'required|string|max:4000',
            'nombres_retorna'=> 'nullable|string|max:120',
            'prm_doc_id'     => 'nullable|exists:parametros,id',
            'doc_retorna'    => 'nullable|integer',
            'prm_parentezco_id' => 'nullable|exists:parametros,id',
            'responsable'    => 'required|exists:users,id',
            'user_doc1_id'   => 'required|exists:users,id',
            'prm_condicion_id' => 'required|exists:parametros,id',
            'prm_orientado_id' => 'required|exists:parametros,id',
            'prm_enfermerd_id' => 'required|exists:parametros,id',
            'prm_brotes_id' => 'required|exists:parametros,id',
            'prm_laceracio_id' => 'required|exists:parametros,id',
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

    }
}
