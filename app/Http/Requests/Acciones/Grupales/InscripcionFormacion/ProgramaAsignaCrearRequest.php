<?php

namespace App\Http\Requests\Acciones\Grupales\InscripcionFormacion;

use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\InscripcionConvenios\ProgramaAsocia;
use Illuminate\Foundation\Http\FormRequest;

class ProgramaAsignaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
       
        $this->_mensaje = [
            'conve_id.required' => 'Seleccione un Convenio',
            'sede_id.required' => 'Seleccione una Sede/Centro',
            'progra_id.required' => 'Seleccione el Programa',
            'tipop_id.required' => 'Seleccione el Tipo de Programa',
            'modal_id.required' => 'Seleccione la Modalidad',
            'sis_esta_id.required' => 'Seleccione un estado',
            
        ];
        $this->_reglasx = [
        'conve_id' => ['required'],
        'sede_id' => ['required'],
        'progra_id' => ['required'],
        'tipop_id' => ['required'],
        'modal_id' => ['required'],
        'sis_esta_id' => ['required'],
            
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

        $registro = ProgramaAsocia::select('programa_asocias.progra_id')
        ->join('convenios', 'programa_asocias.conve_id', '=', 'convenios.id')
        ->join('sede_centros', 'programa_asocias.sede_id', '=', 'sede_centros.id')
        ->join('modalidads', 'programa_asocias.modal_id', '=', 'modalidads.id')
        ->join('tipoprogramas', 'programa_asocias.tipop_id', '=', 'tipoprogramas.id')
        ->where('convenios.id', $this->conve_id) 
        ->where('sede_centros.id', $this->sede_id) 
        ->where('tipoprogramas.id', $this->tipop_id) 
        ->where('modalidads.id', $this->modal_id) 
        ->where('programa_asocias.progra_id', $this->progra_id)
        ->first();
            
        if (isset($registro)) {
            $this->_mensaje['existexx.required'] = 'el grupo ya se encuentra asignado';
            $this->_reglasx['existexx'] = ['Required',];
        }
    }
}
