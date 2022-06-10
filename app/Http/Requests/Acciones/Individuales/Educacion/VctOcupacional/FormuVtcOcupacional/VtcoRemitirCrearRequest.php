<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class VtcoRemitirCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {

        $this->_mensaje = [
            'prm_remitir.required' => 'Seleccione remitir.',
            'prm_remitir.required' => 'Complete intrainstitucional.',
            'interinstitu.required' => 'Complete interinstitucional.',
        ];
        $this->_reglasx = [
            'prm_remitir' => 'required',
            'intrainstitucional' => 'required_if:prm_remitir,227',
            'interinstitu' => 'required_if:prm_remitir,227|max:120',
            'user_res_id' => 'required',
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
