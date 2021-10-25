<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiSitEspecialCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [

            'victimas.required' => 'Indique si es víctima',

        ];
        $this->_reglasx = [
            'victimas'       => ['required','array'],
            'riesgos'        => ['nullable'],
            'prm_victima_id' => ['nullable'],
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

        if ($this->victimas[0] != 853) {
            $this->_reglasx['prm_victima_id'][0] = 'required';
            $this->_mensaje['prm_victima_id.required'] = 'Indique si existe reconocimiento por parte del NNA como víctima';
        } else {
            $this->_reglasx['riesgos'][0] = 'required';
            $this->_mensaje['riesgos.required'] = 'Indique si es víctima';
        }
        if ($this->victimas[0] != null || $this->riesgos[0] != null) {
            if ( $this->riesgos[0] == 853) {
                $this->_reglasx['prm_victima_id'][1] = 'required';
                $this->_mensaje['prm_victima_id.required'] = 'Indique si existe reconocimiento por parte del NNA como víctima';
            }
            if ($this->victimas[0] == 853) {
                $this->_reglasx['prm_victima_id'][1] = 'required';
                $this->_mensaje['prm_victima_id.required'] = 'Indique si existe reconocimiento por parte del NNA como víctima';
            }
        }
        else {
            # code...
        }
    }
}
