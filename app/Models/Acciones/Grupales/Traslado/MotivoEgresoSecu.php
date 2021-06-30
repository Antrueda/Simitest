<?php

namespace App\Models\Acciones\Grupales\Traslado;

use Illuminate\Database\Eloquent\Model;

class MotivoEgresoSecu extends Model
{
    protected $table = 'motivo_egreso_secus';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','estusuario_id', 
         'nombre','descripcion'
    ];
}
