<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class FiAutorizacionCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'fi_compfami_id.required' => 'Seleccione un responsable',
            'i_prm_modalidad_id.required' => 'Seleccione la modalidad',
            'd_autorizacion.required' => 'Seleccione fecha autorizacion',
            'i_prm_autorizo_id.required' => 'Seleccione si autoriza o no.',
            'i_prm_tipo_diligencia_id.required' => 'Seleccione el tipo de diligenciamiento',
        ];
        $this->_reglasx = [
            'i_prm_tipo_diligencia_id' => ['Required'],
            'd_autorizacion' => ['Required'],
            'i_prm_modalidad_id' => ['Required'],
            'i_prm_autorizo_id' => 'required',
            'fi_compfami_id' => ['Required'],
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
            $this->_mensaje['i_prm_parentesco_id.required'] = 'Seleccione el parentesco que tiene con el NNAJ';
            $this->_reglasx['i_prm_parentesco_id'] = 'Required';
        }
        if ($dataxxxx['d_autorizacion'] > date('Y-m-d',time())) { //Mayor de edad
            $this->_mensaje['d_valida.required'] = 'La fecha de autorización es mayor a hoy';
            $this->_reglasx['d_valida'] = 'Required';
        }

    }
}
