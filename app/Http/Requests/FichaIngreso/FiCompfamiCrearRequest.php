<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Foundation\Http\FormRequest;

class FiCompfamiCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'i_prm_parentesco_id.required' => 'Seleccione un parentesco con el nnaj',
            'i_prm_ocupacion_id.required' => 'Seleccione la acupación del componente familiar',
            'i_prm_vinculado_idipron_id.required' => 'Indique si estuvo vinculado',
            'i_prm_convive_nnaj_id.required' => 'Indique si convive con el nnaj',
            'prm_reprlega_id.required' => 'Indique si es el representante legal',
            'd_nacimiento.required' => 'Seleccione una fecha de nacimiento o digite la edad',
            's_telefono.required' => 'Ingrese un número de teléfono',
            's_documento.required' => 'Ingrese el número de documento',
            'sis_municipio_id.required' => 'Seleccione un municipio',
            'prm_tipodocu_id.required' => 'Seleccione tipo de documento',
            's_primer_nombre.required' => 'Ingrese el primer nombre',
            's_primer_apellido.required' => 'Ingrese el primere apellido',
        ];

        $this->_reglasx = [
            'prm_tipodocu_id' => ['required'],
            'i_prm_parentesco_id' => ['required'],
            'i_prm_ocupacion_id' => ['required'],
            'i_prm_vinculado_idipron_id' => ['required'],
            'i_prm_convive_nnaj_id' => ['required'],
            'prm_reprlega_id' => ['required'],
            'd_nacimiento' => ['required'],
            's_telefono' => ['required'],
            's_documento' => ['required'],
            'sis_municipio_id' => ['required'],
            's_primer_nombre' => ['required'],
            's_primer_apellido' => ['required'],
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
        $document = NnajDocu::where('s_documento', $this->s_documento)
            ->first();
        if (isset($document->id)) {

            if (isset($document->fi_datos_basico->sis_nnaj->fi_compfamis
                ->where('sis_nnajnnaj_id', $this->segments()[1])
                ->first()->id)
            ) {
                $this->_reglasx['existexx'] = ['required'];
                $this->_mensaje['existexx.required'] = "El documento: {$this->s_documento}, ya hace parte de la composición familiar del NNAJ";
            }
        }
    }
}
