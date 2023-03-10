<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Models\Acciones\Individuales\Pivotes\EvasionVestuario;
use App\Models\consulta\pivotes\CsdReshogar;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EvasionParentescoRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_parentezco_id.required'=>'Seleccione el parentesco',
            'primer_apellido.required'=>'Ingrese el primer apellido',
            'primer_nombre.required'=>'Ingrese el primer nombre',
            's_telefono.required'=>'Ingrese el telefono',
            'direccion_familiar.required'=>'Ingrese la dirección',
            ];
        $this->_reglasx = [
            'prm_parentezco_id' => 'required|exists:parametros,id',
            'primer_apellido' => 'required',
            'primer_nombre' => 'required',
            'direccion_familiar' => 'required',
            's_telefono' => 'required',
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
         
        }
}
