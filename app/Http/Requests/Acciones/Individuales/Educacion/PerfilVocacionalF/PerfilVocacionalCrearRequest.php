<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\PerfilVocacionalF;


use Illuminate\Foundation\Http\FormRequest;

class PerfilVocacionalCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            // 'nombre_campo.regla' => 'mensaje',
        ];
        $this->_reglasx = [
            'actividades'=> ['required'],
            'fecha'=> ['required'],
            'concepto'=>['required'],
            'user_fun_id'=>['required']
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
        if ( !(count($this->actividades) > 0 && count($this->actividades) <=30) ) {
            $this->_reglasx['numeroactividades'] = 'required';
            $this->_mensaje['numeroactividades.required'] =  'Debe seleccionar como minimo una actividad y maximo 30';
        }

       
    }
}
