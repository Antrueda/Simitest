<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class VtcoCompetensCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'ante_clinico.required' => 'Realice una descripción de antecedentes.',
            'prm_dinsustancias.required' => 'Seleccione una dinamica.',
            'ante_clinico.required' => 'Realice su observacion.',
            'prm_alimentacion.required' => 'Seleccione alimentacion.',
            'prm_higienemayor.required' => 'Seleccione Higiene mayor.',
            'prm_higienemenor.required' => 'Seleccione Higiene menor.',
            'prm_vestido.required' => 'Seleccione vestido.',
            'prm_habitos.required' => 'Seleccione habitos.',
            'prm_activis.required' => 'Seleccione actividades instrumentales.',
            'prm_dominancia.required' => 'Seleccione dominancia.',
            
        ];
        $this->_reglasx = [
            'ante_clinico' => 'required|string|max:4000',
            'prm_dinsustancias' => 'required',
            'obs_clinico' => 'required|string|max:4000',
            'prm_alimentacion' => 'required',
            'prm_higienemayor' => 'required',
            'prm_higienemenor' => 'required',
            'obs_higiene' => 'nullable|string|max:4000',
            'prm_vestido' => 'required',
            'prm_habitos' => 'required',
            'prm_activis' => 'required',
            'prm_dominancia' => 'required',
            'obs_general' => 'nullable|string|max:4000',
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
        //
    }
}
