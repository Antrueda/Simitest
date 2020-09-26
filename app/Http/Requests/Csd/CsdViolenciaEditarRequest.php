<?php

namespace App\Http\Requests\Csd;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CsdViolenciaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_condicion_id.required'=>'Seleccione una condicion',
            'departamento_cond_id.required'=>'Seleccione el departamento',
            'municipio_cond_id.required'=>'Seleccione el municipio',
            'prm_certificado_id.required'=>'Seleccione si tiene certificado',
            'departamento_cert_id.required'=>'Seleccione el departamento',
            'municipio_cert_id.required'=>'Seleccione el municipio',
          ];
        $this->_reglasx = [
            'prm_condicion_id' => 'required|exists:parametros,id',
            'departamento_cond_id' => 'required_if:prm_condicion_id,450|required_if:prm_condicion_id,451|required_if:prm_condicion_id,452|required_if:prm_condicion_id,936|required_if:prm_condicion_id,454',
            'municipio_cond_id' => 'required_if:prm_condicion_id,450|required_if:prm_condicion_id,451|required_if:prm_condicion_id,452|required_if:prm_condicion_id,936|required_if:prm_condicion_id,454',
            'prm_certificado_id' => 'required|exists:parametros,id',
            'departamento_cert_id' => 'required_if:prm_certificado_id,227',
            'municipio_cert_id' => 'required_if:prm_certificado_id,227',
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
