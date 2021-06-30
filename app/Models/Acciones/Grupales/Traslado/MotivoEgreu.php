<?php

namespace App\Models\Acciones\Grupales\Traslado;

use Illuminate\Database\Eloquent\Model;

class MotivoEgreu extends Model
{
    protected $table = 'motivo_egreus';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','estusuario_id', 
         'motivoe_id','motivoese_id'
    ];
}
