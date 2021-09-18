<?php

namespace app\Http\Requests\Acciones\Grupales;

use app\Models\fichaIngreso\FiDatosBasico;
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
            'prm_certif.required'=>'Indique si tiene Certificados académicos',
            'prm_recupe.required'=>'Indique si tiene una Acta de recuperación de logros',
            'prm_matric.required'=>'Indique si tiene el Formato de matrícula',
            ];
        $this->_reglasx = [
            'sis_nnaj_id' => 'required',
            'prm_copdoc' => 'nullable',
            'prm_certif' => 'nullable',
            'prm_recupe' => 'nullable',
            'prm_matric' => 'nullable',
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
            $dataxxxx = $this->toArray(); // todo lo que se envia del formulario

            
            
            
        }
}



