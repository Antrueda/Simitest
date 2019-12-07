<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiComposicionFamiCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

       $this->_mensaje = [
            'i_prm_parentesco_id.required' => 'Seleccione un parenteco con el nnaj',
            'i_prm_ocupacion_id.required' => 'Seleccione la acupación del componente familiar',
            'i_prm_vinculado_idipron_id.required' => 'Indique si estuvo vinculado',
            'i_prm_convive_nnaj_id.required' => 'Indique si convive con el nnaj',
            's_primer_nombre.required' => 'Ingrese el primer nombre', 
            's_primer_apellido.required' => 'Ingrese primer apellido',
            'd_nacimiento.required' => 'Seleccione la fecha de nacimiento',
            's_documento.required' => 'Ingrese un documento de identificación',
            's_documento.unique' => 'Ele docuemento ya existe',
            's_telefono.required'=> 'Ingrese un número de teléfono',
        ];

        $this->_reglasx = [
            'i_prm_parentesco_id'=>['required'],
            'i_prm_ocupacion_id'=>['required'],
            'i_prm_vinculado_idipron_id'=>['required'],
            'i_prm_convive_nnaj_id'=>['required'],
            's_documento'=>['required','unique:fi_datos_basicos'],
            's_primer_nombre'=>['required'], 
            's_primer_apellido'=>['required'],
            'd_nacimiento'=>['required'],
            's_telefono'=>['required'],
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
