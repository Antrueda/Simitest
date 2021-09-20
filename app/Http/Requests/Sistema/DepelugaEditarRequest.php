<?php

namespace app\Http\Requests\Sistema;

use app\Models\Indicadores\InDocIndi;
use Illuminate\Foundation\Http\FormRequest;
class DepelugaEditarRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            // 'name.required' => 'Ingrese el nombre del rol',
            // 'name.unique' => 'el rol ya se encuentra en uso',
        ];
        $this->_reglasx = [
            // 'name' =>
            // [
            //     'required', //y todos las validaciones a que haya lugar separadas por coma
                
            // ],
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
        // $this->_reglasx['name']= ['required',
        //     'unique:roles,name,' . $this->segments()[2]];
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        
    }
}
