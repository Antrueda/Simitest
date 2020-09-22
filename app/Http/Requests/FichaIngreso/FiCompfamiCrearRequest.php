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
            'i_prm_parentesco_id.required' => 'Seleccione un parenteco con el nnaj',
            'i_prm_ocupacion_id.required' => 'Seleccione la acupación del componente familiar',
            'i_prm_vinculado_idipron_id.required' => 'Indique si estuvo vinculado',
            'i_prm_convive_nnaj_id.required' => 'Indique si convive con el nnaj',
            'prm_reprlega_id.required' => 'Indique si es el representante legal',
            's_telefono.required' => 'Ingrese un número de teléfono',
            's_documento.required' => 'Ingrese el número de documento',
        ];

        $this->_reglasx = [
            'i_prm_parentesco_id' => ['required'],
            'i_prm_ocupacion_id' => ['required'],
            'i_prm_vinculado_idipron_id' => ['required'],
            'i_prm_convive_nnaj_id' => ['required'],
            'prm_reprlega_id' => ['required'],
            'd_nacimiento' => ['required'],
            's_telefono' => ['required'],
            's_documento' => ['required'],
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
        if (isset(NnajDocu::where('s_documento', $this->s_documento)
        ->first()->fi_datos_basico->sis_nnaj->fi_compfamis
        ->where('sis_nnajnnaj_id', $this->segments()[1])
        ->first()->id)) {
            $this->_reglasx['existexx'] = ['required'];
            $this->_mensaje['existexx.required']="El documento: {$this->s_documento}, ya hace parte de la composición familiar del NNAJ";
        }
    }
}
