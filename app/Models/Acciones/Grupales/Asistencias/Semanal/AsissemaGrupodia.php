<?php

namespace App\Models\Acciones\Grupales\Asistencias\Semanal;

use Illuminate\Database\Eloquent\Model;

class AsissemaGrupodia extends Model
{
    protected $fillable = [
        'id',
        'asissema_id',
        'prm_dia_id',
        'created_at',
        'updated_at'
    ];
}
