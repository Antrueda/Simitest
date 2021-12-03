<?php

namespace App\Models\Acciones\Grupales\Traslado\Logs;

use Illuminate\Database\Eloquent\Model;

class HMotivoEgreso extends Model
{
    protected $table = 'h_motivo_egresos';

    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','estusuario_id', 
         'nombre','descripcion', 
         'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];

  
  
}
