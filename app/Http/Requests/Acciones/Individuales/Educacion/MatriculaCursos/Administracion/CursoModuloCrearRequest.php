<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\MatriculaCursos\Administracion;

use Illuminate\Foundation\Http\FormRequest;

class CursoModuloCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
       
        $this->_mensaje = [
            'cursos_id.required' => 'Seleccione un curso',
            'modulo_id.required' => 'Seleccione un modulo',
            

        ];
        $this->_reglasx = [
        'cursos_id' => ['required'],
        'modulo_id' => ['required'],

        ];
    }
    //fos_stses_id
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
