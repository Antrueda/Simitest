<?php

namespace app\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InDocIndicadorCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'in_pregunta_id.required' => 'Asigne una pregunta al documento seleccionado',
            'sis_docfuen_id.required' => 'Seleccione un documento fuente',
        ];
        $this->_reglasx = [
            'in_pregunta_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'sis_docfuen_id' =>
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
        // $docuindi = InDocIndi::where('in_indicador_id', $dataxxxx['in_indicador_id'])
        //     ->where('sis_docfuen_id', $dataxxxx['sis_docfuen_id'])->first();
        // if (isset($docuindi->id)) {
        //     $this->_mensaje['asociacion.required'] = 'la asociacion del indicador y el docuemnto fuente ya existe';
        //     $this->_reglasx['asociacion'] = 'required';
        // }
    }
}
