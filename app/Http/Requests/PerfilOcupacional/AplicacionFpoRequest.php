<?php

namespace App\Http\Requests\PerfilOcupacional;

use App\Rules\FechaMenor;
use app\Models\sistema\SisNnaj;
use App\Rules\TiempoCargueRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;

class AplicacionFpoRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {
        $this->_mensaje = [
            'fecha_registro.required' => 'Indique fecha de diligenciamiento',
            'sis_depen_id.required' => 'Seleccione una Dependencia',
            'concepto_perfil.required'   => 'Campo obligatorio',




            ];
        $this->_reglasx = [
            'sis_depen_id' => ['required'],
            'fecha_registro' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'concepto_perfil'       => 'required|string|max:4000',
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
        if ($this->fecha_registro != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha_registro
            ]);
            $this->_reglasx['fecha'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }
        $this->validar();

        return $this->_reglasx;
    }
    public function validar()
    {

        $dato = SisNnaj::findOrFail($this->segments()[2]);
        $nnaj = $dato->fi_datos_basico;
        if( $nnaj != null){
            $edad = $nnaj->nnaj_nacimi->Edad;
        }else{
            $edad=0;
        }

        if (!($edad >= 18 && $edad <29)) {
            $this->_mensaje['permiedad.required'] = 'NNAJ no cumple con la edad para este formulario.';
            $this->_reglasx['permiedad'] = 'required';
        }
    }
}
