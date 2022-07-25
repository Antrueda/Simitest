<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\ValoIdentHabOcupacional;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class VihOcupacionalCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            // 'nombre_campo.regla' => 'mensaje',
        ];
        $this->_reglasx = [
            'fecha'=> ['required','date_format:Y-m-d',new FechaMenor()],
            'sis_depen_id'=>['required'],
            'antecede_clin'=>'required|string|max:4000',
            'prm_dinconsumo'=>'required',
            'obs_sustanpsico'=>'required|string|max:4000',
            'prm_autocuidado'=>'required',
            'prm_rutinas'=>'required',
            'obs_habitos'=>'required|string|max:4000',
            'antece_ocupa'=>'required|string|max:4000',
            'antece_tiempo'=>'required|string|max:4000',
            'prospeccion'=>'required|string|max:4000',
            'familia_nucleo'=>'required|string|max:4000',
            'conc_ocupa'=>'required|string|max:4000',
            'fortalecer'=>'required',
            'user_fun_id'=>'required',
            'prm_remitir'=>'required',
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
        $validaritems = false;

        foreach ($this->compdesempenio as $key => $item) {
            if ($item == null) {
                $validaritems = true;
            }
        }
    
        if ($validaritems == true) {
            $this->_reglasx['validarsuba'] = 'required';
            $this->_mensaje['validarsuba.required'] =  'Por favor Complete componentes del desempeño';
        }
    }
}
