<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiRazoneArchivoCrearRequest extends FormRequest {

  private $_mensaje;
  private $_reglasx;

  public function __construct() {
    $this->_mensaje = [
        'i_prm_documento_id.required' => 'Seleccione seleccione el docuemnto que va anexar',
        's_doc_adjunto_ar.required'=>'Seleccione un documento',
        's_doc_adjunto_ar.mimes'=>'El archivo debe tener extensiones: jpeg o pdf'
    ];
    $this->_reglasx = [
        'i_prm_documento_id' => ['Required'],
        's_doc_adjunto_ar' => 'required|file|mimes:pdf,jpg,jpeg|max:2024',
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
