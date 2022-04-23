<?php

namespace App\Http\Requests\Acciones\Grupales\GestMatrAcademia;


use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use App\Traits\GestionTiempos\ManageTimeTrait;

use Illuminate\Foundation\Http\FormRequest;

class IEstadoMatriculaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {
        // Todo: Colocar los mensajes
        $this->_mensaje = [
            'fechdili.required' => 'Seleccione una fecha',
            'prm_estado_matri.required'=>'Seleccione el estado a asignar',
            'descripcion.required'=> 'Por favor escriba la observacion.',
        ];

        // Todo: Colocar las validaciones
        $this->_reglasx = [
            'fechdili' => ['required','date_format:Y-m-d',new FechaMenor()],
            'prm_estado_matri'=> 'required',
            'descripcion'=> 'required',
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
        if ($this->fechdili != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fechdili
            ]);

            $this->_reglasx['fechdili'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }
        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {
        if($this->prm_estado_matri == 2775){
            $this->_reglasx['prm_motivo_reti'] = 'required';
            $this->_mensaje['prm_motivo_reti.required'] =  'Seleccione el motivo de retiro';

            if($this->prm_motivo_reti == 2777){
                $this->_reglasx['prm_mot_aplazad'] = 'required';
                $this->_mensaje['prm_mot_aplazad.required'] =  'Seleccione el motivo de aplazado';
            }
        }
    }
}
