<?php

namespace App\Models\Acciones\Individuales\Salud\Labrrd;

use Illuminate\Database\Eloquent\Model;

class LabrrdAsoComponente extends Model
{
    protected $fillable = [
        'id',
        'componente_id',
        'tipo_valoracion',
        'tipo_componente',
        'estusuarios_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
