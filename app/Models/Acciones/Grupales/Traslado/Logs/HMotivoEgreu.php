<?php

namespace App\Models\Acciones\Grupales\Traslado\Logs;

use Illuminate\Database\Eloquent\Model;

class HMotivoEgreu extends Model
{
    protected $table = 'h_motivo_egreus';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id',
<<<<<<< HEAD
        // 'estusuario_id', 
=======
>>>>>>> david
         'motivoe_id','motivoese_id', 
         'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];

  
}
