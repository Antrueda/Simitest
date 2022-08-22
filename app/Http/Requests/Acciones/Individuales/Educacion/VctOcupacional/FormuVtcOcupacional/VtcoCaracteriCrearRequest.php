<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class VtcoCaracteriCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {
        $this->_mensaje = [
            'ante_clinico.required' => 'Realice una descripción de antecedentes.',
            'caracterizacion.required' => 'Seleccione una dinamica.', 
        ];
        $this->_reglasx = [
            'concepto' => 'nullable|max:4000',
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
        $validaritems = false;
        foreach ($this->caracterizacion as $key => $value) {
            $this->_reglasx['caracterizacion.'.$key.'.descripcion'] = 'required|max:4000';
            $this->_mensaje['caracterizacion.'.$key.'.descripcion.max'] =  'La descripcion no puede ser mayor a 4000 caracteres';

            if (isset($value['items'])) {
                foreach ($value['items'] as $key => $item) {
                    if ($item == null) {
                        $validaritems = true;
                    }
                }
            }else{
                $this->_reglasx['validaritem'] = 'required';
                $this->_mensaje['validaritem.required'] =  'Para completar formulario todas las subareas deben tener ítems a evaluar, comunicarse con el administrador del sistema para agregar ítems o desactivar subarea.';
            }
            
        }
        if ($validaritems == true) {
            $this->_reglasx['validaritem'] = 'required';
            $this->_mensaje['validaritem.required'] =  'Por favor Complete avaluacion';
        }
    }
}
