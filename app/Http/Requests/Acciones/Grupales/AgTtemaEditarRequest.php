<?php

namespace App\Http\Requests\Acciones\Grupales;

use App\Models\Acciones\Grupales\AgTallerAgTema;
use Illuminate\Foundation\Http\FormRequest;

class AgTtemaEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'ag_taller_id.required' => 'Seleccione un taller',
        ];
        $this->_reglasx = [
            'ag_taller_id' =>['required'],
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
        $docuindi = AgTallerAgTema::where('ag_taller_id', $this->ag_taller_id)
        ->where('ag_tema_id', $this->segments()[2])
        ->first();
         // todo lo que se envia del formulario
        if (isset($docuindi->id)) {
            $this->_mensaje['existe.required'] = 'El Tema y el Taller ya se encuentran asiciados';
            $this->_reglasx['existe'] = 'required';
        }
    }
}
