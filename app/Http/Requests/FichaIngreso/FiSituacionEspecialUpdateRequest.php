<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiSituacionEspecialUpdateRequest extends FormRequest {

  private $_mensaje;
  private $_reglasx;

  public function __construct() {
    $this->_mensaje = [
        'i_prm_situacion_vulnera_id.required' => 'Seleccione al menos una situacion de vulneracion',
//            'i_prm_tipo_id.required' => 'Seleccione el tipo de ESCNNA',
//            'i_prm_victima_escnna_id.required' => 'Seleccione una forma de Riesgo de ESCNNA',
    ];
    $this->_reglasx = [
        'i_prm_situacion_vulnera_id' => ['required'],
//            'i_prm_tipo_id' => ['required'],
//            'i_prm_victima_escnna_id' => ['required'],
    ];
  }

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }

  public function messages() {
    return $this->_mensaje;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    $this->validar();

    return $this->_reglasx;
  }

  public function validar() {
    $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    $basicosx = FiDatosBasico::where('sis_nnaj_id', $dataxxxx['sis_nnaj_id'])->first();
    if ($basicosx->prm_poblacion_id == 650) {
      $this->_mensaje['i_tiempo.required'] = 'Indique el tiempo de permanencia';
      $this->_reglasx['i_tiempo'] = 'required';
      $this->_mensaje['i_prm_ttiempo_id.required'] = 'Indique el tiempo de permanencia';
      $this->_reglasx['i_prm_ttiempo_id'] = 'required';
      $this->_mensaje['i_prm_iniciado_id.required'] = 'Seleccione las razones de haber iniciado la calle';
      $this->_reglasx['i_prm_iniciado_id'] = 'required';
      $this->_mensaje['i_prm_continua_id.required'] = 'Seleccione las razones de continuar en la calle';
      $this->_reglasx['i_prm_continua_id'] = 'required';
    }
  }

}
