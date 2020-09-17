<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiCompfamiCrearRequest extends FormRequest
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
            'prm_reprlega_id.required' => 'Indique si es el representante legal',
            's_telefono.required'=> 'Ingrese un número de teléfono',
            's_documento.required'=> 'Ingrese el número de documento',
            's_documento.unique'=> 'El documento ya está siendo utilizado',
        ];

        $this->_reglasx = [
            'i_prm_parentesco_id'=>['required'],
            'i_prm_ocupacion_id'=>['required'],
            'i_prm_vinculado_idipron_id'=>['required'],
            'i_prm_convive_nnaj_id'=>['required'],
            'prm_reprlega_id'=>['required'],
            'd_nacimiento'=>['required'],
            's_telefono'=>['required'],
            's_documento'=>['required','unique:nnaj_docus,s_documento'],
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
