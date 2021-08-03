<?php

namespace App\Models\Direccionamiento;

use App\Models\sistema\SisEntidad;
use app\Models\sistema\SisServicio;
use Illuminate\Database\Eloquent\Model;

class DireccionInst extends Model
{
    protected $fillable = [
        'direc_id', 'justificacion','sis_serv_id', 'seguimiento_id','intra_id',
        'sis_entidad_id', 'ent_servicio_id','nombre_entidad', 'prm_tipoenti_id',
   ];  //



   public function direc(){
    return $this->belongsTo(Direccionamiento::class,'direc_id');
}

public function Servicio(){
    return $this->belongsTo(SisServicio::class,'sis_serv_id');
}
public function Entidad(){
    return $this->belongsTo(SisEntidad::class,'sis_entidad_id');
}


}
