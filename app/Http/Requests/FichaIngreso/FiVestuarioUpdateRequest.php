<?php

namespace app\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiVestuarioUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_sexo_etario_id.required' => 'Seleccione el sexo',
            'prm_t_pantalon_id.required' => 'Seleccione la talla del pantalón',
            'prm_t_camisa_id.required' => 'Seleccione la talla de la camisa',
            'prm_t_zapato_id.required' => 'Seleccione la talla de los zapatos',
        ];
        $this->_reglasx = [
            'prm_t_pantalon_id' => ['required'],
            'prm_t_camisa_id' => ['required'],
            'prm_t_zapato_id' => ['required'],
            'prm_sexo_etario_id' => ['required'],
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
