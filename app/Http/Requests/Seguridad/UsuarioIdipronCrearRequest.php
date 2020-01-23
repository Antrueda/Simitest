<?php

namespace App\Http\Requests\Seguridad;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioIdipronCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {


        // Mensajes para las validaciones para users
        $this->_mensaje['email.required'] = 'El E-mail es requerido';
        $this->_mensaje['email.unique'] = 'El E-mail ya existe';

        // Mensajes para las validaciones para sis_documento_usrs
        $this->_mensaje['s_documento.required'] = 'El número de documento es requerido';
        $this->_mensaje['s_documento.unique'] = 'El número de documento ya existe';
        $this->_mensaje['prm_documento_id.required'] = 'Selecione un tipo de documento';
        $this->_mensaje['sis_municipio_id.required'] = 'Seleccione el municipio de expedición del documento';

        // Mensajes para las validaciones para sis_usuario_botacoras
        $this->_mensaje['s_primer_nombre.required'] = 'Ingrese el primer nombre';
        //$this->_mensaje['s_segundo_nombre.required'] = 'ingrese el segundo nombre';
        $this->_mensaje['s_primer_apellido.required'] = 'Ingrese el primer apellido';
        //$this->_mensaje['s_segundo_apellido.required'] = 'Ingrese el segundo apellido';
        $this->_mensaje['s_telefono.required'] = 'Ingrese un número de telefono';
        $this->_mensaje['prm_tvinculacion_id.required'] = 'Seleccione el tipo de vinculacion';
        $this->_mensaje['s_matriculap.required'] = 'Ingrese la matricula profesional';
        $this->_mensaje['sis_cargo_id.required'] = 'Seleccione el cargo';
        $this->_mensaje['i_tiempo.required'] = 'Seleccione una fecha para la carga de información';
        $this->_mensaje['d_vinculacion.required'] = 'Seleccione una fecha de vinculación';
        $this->_mensaje['s_observacion.required'] = 'El registro debe tener una observación';
        $this->_mensaje['sis_esta_id.required'] = 'Seleccione un estado';
        // Reglas para las validaciones de la data de sis_documento_usrs
        $this->_reglasx['email'] = ['required', 'unique:users'];
        // Reglas para las validaciones de la data de sis_documento_usrs
        $this->_reglasx['s_documento'] = ['required', 'unique:users'];
        $this->_reglasx['prm_documento_id'] = ['required'];
        $this->_reglasx['sis_municipio_id'] = ['required'];
        $this->_reglasx['sis_esta_id'] = ['required'];
        // Reglas para las validaciones de la data de sis_usuario_bitacoras
        $this->_reglasx['s_primer_nombre'] = ['required'];
        //$this->_reglasx['s_segundo_nombre'] = ['required'];
        $this->_reglasx['s_primer_apellido'] = ['required'];
        //$this->_reglasx['s_segundo_apellido']  = ['required'];
        $this->_reglasx['s_telefono'] = ['required'];
        $this->_reglasx['prm_tvinculacion_id'] = ['required'];
        $this->_reglasx['s_matriculap'] = ['required'];
        $this->_reglasx['sis_cargo_id'] = ['required'];
        $this->_reglasx['i_tiempo'] = ['required'];
        $this->_reglasx['d_vinculacion'] = ['required'];
        $this->_reglasx['s_observacion'] = ['required'];
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
