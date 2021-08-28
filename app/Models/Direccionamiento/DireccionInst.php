<?php

namespace App\Models\Direccionamiento;

use App\Models\sistema\SisEntidad;
use app\Models\sistema\SisServicio;
use Illuminate\Database\Eloquent\Model;

class DireccionInst extends Model
{
    protected $table = 'direccion_inst'; 
    protected $fillable = [
        'direc_id', 'justificacion','sis_serv_id', 'seguimiento_id','intra_id',
        'sis_entidad_id', 'ent_servicio_id','nombre_entidad', 'prm_tipoenti_id','inter_id', 
        'no_docinter','nombreinter','telefonointer','intercargo',
   ];  //



   public function direc(){
    return $this->belongsTo(Direccionamiento::class,'direc_id');
}

public function entidad(){
    return $this->belongsTo(SisEntidad::class,'sis_entidad_id');
}

public function programas(){
    return $this->belongsTo(EntidadServicio::class,'ent_servicio_id');
}


}
