<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionSicorrd;

use Illuminate\Database\Eloquent\Model;

class VsrrdFactore extends Model
{
    protected $fillable = [
        'nombre',
        'estusuarios_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
