<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Models\Acciones\Grupales\AgResponsable;
use Illuminate\Foundation\Http\FormRequest;

class AgRelacionCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'ag_recurso_id.required' => 'Seleccione un recurso',
            'i_cantidad.required' => 'Indique la cantidad',

        ];
        $this->_reglasx = [
            'ag_recurso_id' => ['required',],
            'i_cantidad' => ['required',],
  
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
        /**
         * indentificar si ya tiene un responsable
         */
        //$dataxxxx = $this->toArray(); // todo lo que se envia del formulario



    }
}
