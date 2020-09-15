<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiSituacionEspecialCrearRequest extends FormRequest {

  private $_mensaje;
  private $_reglasx;

  public function __construct() {

    $this->_mensaje = [
        'i_prm_situacion_vulnera_id.required' => 'Seleccione al menos una situacion de vulneracion',

    ];
    $this->_reglasx = [
        'i_prm_situacion_vulnera_id' => ['required'],

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
    $basicosx = FiDatosBasico::find($this->segments()[1]);
    if ($basicosx->prm_tipoblaci_id == 650) {
      $this->_mensaje['i_tiempo.required'] = 'Indique el tiempo de permanencia';
      $this->_reglasx['i_tiempo'] = 'required';
      $this->_mensaje['i_prm_ttiempo_id.required'] = 'Indique el tiempo de permanencia';
      $this->_reglasx['i_prm_ttiempo_id'] = 'required';
      $this->_mensaje['i_prm_iniciado_id.required'] = 'Seleccione las razones de haber iniciado la calle';
      $this->_reglasx['i_prm_iniciado_id'] = 'required';
      $this->_mensaje['i_prm_continua_id.required'] = 'Seleccione las razones de continuar en la calle';
      $this->_reglasx['i_prm_continua_id'] = 'required';
    }
    if ($basicosx->prm_estrateg_id == 2323) {
        $this->_mensaje['prm_presconf_id.required'] = 'Seleccione si presenta conflicto';
        $this->_reglasx['prm_presconf_id'] = ['required'];
    }
  }

}
