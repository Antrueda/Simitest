<?php

namespace App\Http\Requests\Vsi;

use App\Models\sicosocial\Vsi;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VsiBasicoEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'sis_depen_id.required' => 'Seleccione una upi',
            'fecha.required' => 'Seleccione una fecha',
        ];
        $edad = Carbon::today()->sub(28, 'years')->isoFormat('YYYY-MM-DD');
        $this->_reglasx = [
            // 'sis_nnaj_id' => 'required|exists:sis_nnajs,id',
            's_primer_apellido' => 'required|string|max:120',
            's_segundo_apellido' => 'nullable|string|max:120',
            's_primer_nombre' => 'required|string|max:120',
            's_segundo_nombre' => 'nullable|string|max:120',
            's_nombre_identitario' => 'nullable|string|max:120',
            's_apodo' => 'nullable|string|max:120',
            'prm_documento_id' => 'required|exists:parametros,id',
            'prm_doc_fisico_id' => 'required|exists:parametros,id',
            'prm_ayuda_id' => 'required_if:prm_doc_fisico_id,228',
            's_documento' => 'required|string|max:120',
            'd_nacimiento' => 'required|date|after:'.$edad,
            'prm_sexo_id' => 'required|exists:parametros,id',
            'prm_identidad_genero_id' => 'required|exists:parametros,id',
            'prm_orientacion_sexual_id' => 'required|exists:parametros,id',
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
        $datosbas=Vsi::find($this->segments()[3]);;
        $this->_reglasx['s_documento'] = ['required', 'unique:nnaj_docus,s_documento,' . $datosbas->nnaj->fi_datos_basico->nnaj_docu->id];       
    }
}
