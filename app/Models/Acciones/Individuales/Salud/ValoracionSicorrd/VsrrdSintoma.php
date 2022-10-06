<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionSicorrd;

use Illuminate\Database\Eloquent\Model;

class VsrrdSintoma extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
