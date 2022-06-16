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
        $validaritems = false;
        foreach ($this->compdesempenio as $key => $value) {
            // $this->_reglasx['compdesempenio.'.$key.'.descripcion'] = 'nullable|max:4000';
            // $this->_mensaje['compdesempenio.'.$key.'.descripcion.max'] =  'La descripcion no puede ser mayor a 4000 caracteres';

            foreach ($value['subareas'] as $key => $item) {
                if ($item == null) {
                    $validaritems = true;
                }
            }
        }
        if ($validaritems == true) {
            $this->_reglasx['validarsuba'] = 'required';
            $this->_mensaje['validarsuba.required'] =  'Por favor Complete componentes del desempeño';
        }
    }
}
