<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos;

use App\Rules\Acciones\Individuales\Educacion\CuestionarioGustos\HabilidadesRule;
use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class CgihCuestionarioCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {
       
        $this->_reglasx = [
            'habilidades'=> ['required',new HabilidadesRule()],
           // 'habilidades'=> ['required', $this validar()],
            'sis_depen_id.required' => 'Seleccione una Dependencia',
            'fecha'=> ['required','date_format:Y-m-d',new FechaMenor()],
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

    
  
    /**
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->fecha != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'sis_depen_id' => ['required'],
                'fechregi' => $this->fecha
                
            ]);

            $this->_reglasx['fecha'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }

        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {       
        if ( !(count($this->habilidades) > 0 && count($this->habilidades) <=36) ) {
            $this->_reglasx['numerohabilidades'] = 'required';
            $this->_mensaje['numerohabilidades.required'] =  'Debe seleccionar como minimo una habilidad';
        }

       
    }
}
