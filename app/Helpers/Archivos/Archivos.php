<?php

namespace App\Helpers\Archivos;

use Illuminate\Support\Facades\Storage;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Archivos
 *
 * @author Ing. José Dúmar Jiménez Ruíz (nowen21@gmail.com)
 */
class Archivos {

  public function __construct() {
    
  }

  private function guardarArchivoCarpeta($dataxxxx) {
    $rutaxxxx = '';
    
    if ($dataxxxx['requestx']->file($dataxxxx['nombarch'])) {
      //$rutaxxxx= Storage::disk($dataxxxx['diskxxxx'])->put($dataxxxx['rutacarp'],$dataxxxx['requestx']->file($dataxxxx['nombarch']));
      $rutaxxxx = $dataxxxx['requestx']->file($dataxxxx['nombarch'])->store('public/fi/razones');
      //$rutaxxxx = Storage::disk($dataxxxx['diskxxxx'])->put($dataxxxx['rutacarp'], $dataxxxx['requestx']->file($dataxxxx['nombarch']));
    }
    
    return $rutaxxxx;
  }

  public function getRuta($dataxxxx) {
    return $this->guardarArchivoCarpeta($dataxxxx);
  }

}
