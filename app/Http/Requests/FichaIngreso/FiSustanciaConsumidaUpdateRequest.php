<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiSustanciaConsumidaUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_sustancia_id.required' => 'Seleccione la sustancia',
            'i_edad_uso.required' => 'Escriba la edad de uso por primera vez',
            'i_prm_consume_id.required' => 'Seleccione si ha consumido el último mes',
        ];
        $this->_reglasx = [
            'i_prm_sustancia_id' => ['required'],
            'i_edad_uso' => ['required'],
            'i_prm_consume_id' => ['required'], 
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
        $registro = FiDatosBasico::select('fi_consumo_spas.id')
        ->join('fi_consumo_spas', 'fi_datos_basicos.sis_nnaj_id', '=', 'fi_consumo_spas.sis_nnaj_id')
        ->join('fi_sustancia_consumidas', 'fi_consumo_spas.id', '=', 'fi_sustancia_consumidas.fi_consumo_spa_id')
        ->where('fi_datos_basicos.id', $this->segments()[1])
        ->where('fi_sustancia_consumidas.i_prm_sustancia_id', $this->i_prm_sustancia_id)
        ->whereNotIn('fi_sustancia_consumidas.id',[$this->segments()[4]])
        ->first();

    if (isset($registro->id)) {
        $this->_mensaje['existexx.required'] = 'La sustancia ya está asociada';
        $this->_reglasx['existexx'] = ['Required',];
    }
    }
}
