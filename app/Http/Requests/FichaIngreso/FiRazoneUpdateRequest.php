<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiRazoneUpdateRequest extends FormRequest {

  private $_mensaje;
  private $_reglasx;

  public function __construct() {
    $this->_mensaje = [
        's_porque_ingresar.required' => 'Seleccione razones ingresar al idipron',
        'userd_id' => 'Selecciones la persona que diligencia',
        'sis_dependend_id' => 'Seleccione el equipo o área a la que pertenece la persona que diligencia',
        'userr_id' => 'Selecciones la persona responsable',
        'sis_dependenr_id' => 'Seleccione el equipo o área a la que pertenece la persona responsable',
        'i_prm_estado_ingreso_id.required' => 'Seleccione el estado del ingreso',
    ];
    $this->_reglasx = [
        's_porque_ingresar' => ['Required'],
        'userd_id' => ['Required'],
        'sis_dependend_id' => ['Required'],
        'userr_id' => ['Required'],
        'sis_dependenr_id' => ['Required'],
        'i_prm_estado_ingreso_id' => ['Required'],
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
  }

}
