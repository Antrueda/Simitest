<?php

namespace App\Http\Requests\PerfilOcupacional;

use Illuminate\Foundation\Http\FormRequest;

class DesempenioItemEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'item_nombre.required' => 'El nombre es requerido',
            'item_nombre.unique' => 'El nombre ya existe',
            'item_nombre.max' => 'El nombre debe tener un máximo de 120 caracteres',
            'desempenio_id.required'=> 'Seleccione el desempeño',
            'sis_esta_id.required'=> 'Seleccione el estado',
            'estusuario_id.required'=> 'Seleccione justificación ',
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
        $this->_reglasx = [
            'item_nombre' => ['Required','string','max:120','unique:fpo_desempenio_items,item_nombre,'. $this->segments()[3]],
            'desempenio_id' => ['Required'],
            'sis_esta_id' => ['Required'],
            'estusuario_id' => ['Required'],
            ];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}

