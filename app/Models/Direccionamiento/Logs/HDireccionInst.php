<?php

namespace App\Models\Direccionamiento\Logs;


use Illuminate\Database\Eloquent\Model;

class HDireccionInst extends Model
{
    protected $table = 'h_direccion_inst'; 
    protected $fillable = [
        'direc_id', 'justificacion','sis_serv_id', 'seguimiento_id','intra_id',
        'sis_entidad_id', 'ent_servicio_id','nombre_entidad', 'prm_tipoenti_id','inter_id', 
        'no_docinter','nombreinter','telefonointer','intercargo', 'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx','sis_esta_id','user_crea_id','user_edita_id',
   ];  //



  

}
