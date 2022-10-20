<?php

namespace App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast;

use Illuminate\Database\Eloquent\Model;

class DastAccione extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'estusuarios_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function getNombreAttribute($value)
    {
        return mb_strtoupper($value, 'utf-8');
    }

    public function getDescripcionAttribute($value)
    {
        return mb_strtoupper($value, 'utf-8');
    }
}
