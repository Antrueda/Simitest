<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\PerfilVocacionalF;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class PerfilVocacionalCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'sis_depen_id.required' => 'Seleccione la UPI/DEPENDENCIA donde aplica el formulario.',
        ];
        $this->_reglasx = [
            'actividades'=> ['required'],
            'fecha'=> ['required','date_format:Y-m-d',new FechaMenor()],
            'sis_depen_id'=>['required'],
            'observaciones'=>['required'],
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
        if ($this->fecha != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha
            ]);

            $this->_reglasx['fecha'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }

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
