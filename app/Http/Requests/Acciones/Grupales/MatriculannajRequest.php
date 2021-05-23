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
            'prm_grado.required'=>'Seleccione el grado a matricular',
            'prm_grupo.required'=>'Seleccione el grupo',
            'prm_estra.required'=>'Seleccione la estrategia',
            'sis_nnaj_id.required'=>'Seleccione un NNAJ',
            ];
        $this->_reglasx = [
            'sis_nnaj_id' => 'required',
            'prm_grado' => 'required',
            'prm_grupo' => 'required',
            'prm_estra' => 'required',
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



