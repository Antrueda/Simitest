<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class MatriculannajRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'sis_nnaj_id.required'=>'Seleccione un NNAJ',
            'prm_copdoc.required'=>'Indique si tiene una copia del documento',
            'prm_matric.required'=>'Indique si tiene el Formato de matrícula',
            'prm_simianti.required'=>'Indique si tiene SIMAT',
            ];
        $this->_reglasx = [
            'sis_nnaj_id' => 'required',
            'prm_copdoc' => 'required',
            'prm_certif' => 'nullable',
            'prm_matric' => 'required',
            'prm_simianti'=> 'required',
            'observaciones' => 'nullable',
            
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
        return $this->_reglasx;    }

        public function validar()
        {
            $dataxxxx = $this->toArray(); // todo lo que se envia del formulario

            
            
            
        }
}



