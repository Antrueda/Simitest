<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional;
use Illuminate\Foundation\Http\FormRequest;

class VctAreaEditRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {  
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre del área.',
            'nombre.unique'                 => 'El área ya se encuentra en uso',
            'descripcion.required'          => 'Debe diligenciar la descripción del área.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del área.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del área.',
        ];        
        $this->_reglasx = [
            'descripcion'          => ['required', 'string'],
            'estusuarios_id'       => ['required', 'integer', 'exists:estusuarios,id'],
            'sis_esta_id'          => ['required', 'integer', 'exists:sis_estas,id'],
        ];
    }


    // $this->_reglasx['nombre'] = [
    //     'required',
    //     'unique:areas,nombre,' . $this->segments()[2]
    // ];

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
        $this->_reglasx['nombre'] = [
            'required', 'string',
            'unique:vcto_areas,nombre,' . $this->segments()[3]
        ];
        return $this->_reglasx;
    }

    public function validar()
    {
    }
}
