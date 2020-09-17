<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiConsumoSpaCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_consume_spa_id.required' => 'Seleccione consume spa',
        ];
        $this->_reglasx = [
            'i_prm_consume_spa_id' => ['Required',],

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
        
       
        
        
    }
}
