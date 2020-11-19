<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiRazoneArchivoCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_documento_id.required' => 'Seleccione seleccione el docuemnto que va anexar',
            's_doc_adjunto_ar.required' => 'Seleccione un documento',
            's_doc_adjunto_ar.max' => 'El máximo del documento es de 2 Gb',
        ];
        $this->_reglasx = [
            'i_prm_documento_id' => ['Required'],
            's_doc_adjunto_ar' => [
                'required',
                'max:2024',
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
        $mimexxxx = 'mimes:pdf';
        $extensio = 'pdf';
        if ($this->i_prm_documento_id == 2468) {
            $mimexxxx = 'mimes:jpeg';
            $extensio = 'jpeg';
        }
        $this->_mensaje['s_doc_adjunto_ar.mimes'] = 'El archivo debe tener extensión: ' . $extensio;
        $this->_reglasx['s_doc_adjunto_ar'][2] = $mimexxxx;
    }
}
