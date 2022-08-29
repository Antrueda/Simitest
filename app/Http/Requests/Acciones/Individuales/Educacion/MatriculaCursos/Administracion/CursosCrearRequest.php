<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\MatriculaCursos\Administracion;


use Illuminate\Foundation\Http\FormRequest;

class CursosCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_cursos.required' => 'El nombre es requerido',
            's_cursos.max' => 'El nombre un máximo de 200 caracteres',
            'estusuario_id.required'=> 'Seleccione la justificación de estado',
        ];
        $this->_reglasx = [
            's_cursos' => ['Required','string','max:200'],
            'grado_reque_id' => ['Required'],
            'tipo_curso_id' => ['Required'],
            'estusuario_id' => ['Required'],
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
