<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiRedesApoyoUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'sis_entidad_id.required' => 'Seleccione una entidad',
            's_servicio.required' => 'Ingrese un servicio',
            'i_tiempo.required' => 'Indique el tiempo que doró el servicio',
            'i_prm_tiempo_id.required' => 'Seleccione la unidad del tiempo',
            'i_prm_anio_prestacion_id.required' => 'Seleccione el año de prestación',
        ];
        $this->_reglasx = [
            'sis_entidad_id' => ['required'],
            's_servicio' => ['required'],
            'i_tiempo' => ['required'],
            'i_prm_tiempo_id' => ['required'],
            'i_prm_anio_prestacion_id' => ['required'],
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
