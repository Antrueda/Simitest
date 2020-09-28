<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiDinFamiliarEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_familiar_id.required' => 'Seleccione un motivo',
            'prm_hogar_id.required' => 'Seleccione un motivo',
            's_doc_adjunto_ar.required'=>'Debe adjuntar el genograma',
            's_doc_adjunto_ar.mimes'=>'El archivo debe ser imagen o pdf',
        ];
        $this->_reglasx = [
            'prm_familiar_id' => 'required_without:prm_hogar_id',
            'prm_hogar_id' => 'required_without:prm_familiar_id',
            'cuidador' => 'nullable|array',
            'lugar' => 'required|string|max:4000',
            'ausencia' => 'nullable|array',
            'descripcion' => 'required|string|max:4000',
            'calles' => 'nullable|array',
            'delitos' => 'nullable|array',
            'prostituciones' => 'nullable|array',
            'libertades' => 'nullable|array',
            'consumo' => 'nullable|array',
            'salud' => 'nullable|array',
            's_doc_adjunto_ar' => 'nullable|file|mimes:pdf,jpg,jpeg|max:1024',
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
        $nnajxxxx = FiDatosBasico::find($this->segments()[1]);
        $edad = $nnajxxxx->nnaj_nacimi->Edad;

        if ($edad < 18) { //Mayor de edad
            $this->_mensaje['cuidador.required'] = 'Seleccione Quién(es) asume(n) el cuidado';
            $this->_reglasx['cuidador'] = 'Required';
            $this->_mensaje['lugar.required'] = 'Describa el lugar donde los cuidan';
            $this->_reglasx['lugar'] = 'Required';
            $this->_mensaje['ausencia.required'] = 'Seleccione el motivo por el cual hay ausencia de/los representantes';
            $this->_reglasx['ausencia'] = 'Required';
        }

    }
}
