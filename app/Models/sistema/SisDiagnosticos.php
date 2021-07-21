<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;

class SisDiagnosticos extends Model{
    protected $table = 'sis_diagnosticos';

    public function getCodigoNombreAttribute(){
        return $this->codigo . ' - ' . $this->descripcion;
    }

    public function getSexoAttribute(){
        return $this->sexo;
    }
}
