<?php

namespace app\Http\Requests\Indicadores;

use app\Models\Indicadores\InValoracion;
use Illuminate\Foundation\Http\FormRequest;

class InValoracionCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_valoracion.required' => 'Ingrese la valoración',
            'i_prm_categoria_id.required' => 'Seleccione una categoría',
            'i_prm_avance_id.required' => 'Seleccione el nivel de avance',


        ];
        $this->_reglasx = [
            's_valoracion' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'i_prm_categoria_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'i_prm_avance_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],



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
        $validaci = InValoracion::where('in_lineabase_nnaj_id', $this->in_lineabase_nnaj_id)
            ->where('i_prm_cactual_id', $this->i_prm_categoria_id)
            ->first();
            if(isset($validaci->id)){
                $this->_reglasx['existexx']='required';
                $this->_mensaje['existexx.required']='LA LÍNEA BASE Y LA CATEGORÍA YA ESTÁN ASOCIADAS';
            }
    }
}
