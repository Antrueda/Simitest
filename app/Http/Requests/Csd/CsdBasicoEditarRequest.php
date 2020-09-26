<?php

namespace App\Http\Requests\Csd;


use Illuminate\Foundation\Http\FormRequest;

class CsdBasicoEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'primer_nombre.required' =>'Seleccione un motivo',
            'segundo_nombre.required' =>'Seleccione un motivo',
            'primer_apellido.required' =>'Seleccione un motivo',
            'segundo_apellido.required' =>'Seleccione un motivo',
            'identitario.required' => 'Seleccione un motivo',
            'apodo.required' =>'Seleccione un motivo',
            'prm_sexo_id.required' => 'Seleccione un motivo',
            'prm_genero_id.required' => 'Seleccione un motivo',
            'prm_sexual_id.required' => 'Seleccione un motivo',
            'nacimiento.required' =>'Seleccione un motivo',
            'pais_id.required' => 'Seleccione un motivo',
            'departamento_id.required' => 'Seleccione un motivo',
            'municipio_id.required' =>'Seleccione un motivo',
            'prm_documento_id.required' => 'Seleccione un motivo',
            'prm_doc_fisico_id.required' => 'Seleccione un motivo',
            'prm_sin_fisico_id.required' => 'Seleccione un motivo',
            'documento.required' =>'Seleccione un motivo',
            'pais_docum_id.required' => 'Seleccione un motivo',
            'departamento_docum_id.required' => 'Seleccione un motivo',
            'municipio_docum_id.required' =>'Seleccione un motivo',
            'prm_gruposang_id.required' => 'Seleccione un motivo',
            'prm_factorsang_id.required' => 'Seleccione un motivo',
            'prm_militar_id.required' => 'Seleccione un motivo',
            'prm_libreta_id.required' =>'Seleccione un motivo',
            'prm_civil_id.required' => 'Seleccione un motivo',
            'prm_etnia_id.required' => 'Seleccione un motivo',
            'prm_cual_id.required' => 'Seleccione un motivo',
            'prm_poblacion_id.required' =>'Seleccione un motivo',
            
            ];
        $this->_reglasx = [
            'primer_nombre' =>'required|string|max:120',
            'segundo_nombre' =>'required|string|max:120',
            'primer_apellido' =>'required|string|max:120',
            'segundo_apellido' =>'required|string|max:120',
            'identitario' => 'required|string|max:120',
            'apodo' =>'required|string|max:120',
            'prm_sexo_id' => 'required|exists:parametros,id',
            'prm_genero_id' => 'required|exists:parametros,id',
            'prm_sexual_id' => 'required|exists:parametros,id',
            /*
            'nacimiento' =>'Seleccione un motivo',
            'pais_id' => 'Seleccione un motivo',
            'departamento_id' => 'Seleccione un motivo',
            'municipio_id' =>'Seleccione un motivo',
            'documento' =>'Seleccione un motivo',
            'pais_docum_id' => 'Seleccione un motivo',
            'departamento_docum_id' => 'Seleccione un motivo',
            'municipio_docum_id' =>'Seleccione un motivo',
            */
            'prm_documento_id' => 'required|exists:parametros,id',
            'prm_doc_fisico_id' => 'required|exists:parametros,id',
            'prm_sin_fisico_id' => 'required|exists:parametros,id',
           'prm_gruposang_id' => 'required|exists:parametros,id',
            'prm_factorsang_id' => 'required|exists:parametros,id',
            'prm_militar_id' => 'required|exists:parametros,id',
            'prm_libreta_id' =>'required|exists:parametros,id',
            'prm_civil_id' => 'required|exists:parametros,id',
            'prm_etnia_id' => 'required|exists:parametros,id',
            'prm_cual_id' => 'required|exists:parametros,id',
            'prm_poblacion_id' =>'required|exists:parametros,id',
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

        }
}
