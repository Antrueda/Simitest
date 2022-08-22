<?php

namespace App\Http\Requests\PerfilOcupacional;

use Illuminate\Foundation\Http\FormRequest;

class DesempenioCategoriaCreateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required' => 'El nombre es requerido',
            'nombre.unique' => 'El nombre ya existe',
            'nombre.max' => 'El nombre un máximo de 60 caracteres',
            'sis_esta_id.required'=> 'Seleccione el estado',
        ];
        $this->_reglasx = [
        'nombre' => ['Required','string','max:60','unique:fpo_desempenio_categorias'],
        'sis_esta_id' => ['Required'],
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
    }
}
