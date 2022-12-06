<?php

namespace App\Models\Acciones\Individuales\Salud\Labrrd;

use Illuminate\Database\Eloquent\Model;

class LabrrdComponente extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'estusuarios_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function getNombreAttribute($value)
    {
        return mb_strtoupper($value, 'utf-8');
    }
}
