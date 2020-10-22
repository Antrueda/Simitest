<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdGeningDia extends Model
{
    protected $table = 'csd_gening_dias';

    protected $fillable = [
        'parametro_id',
        'csd_geningreso_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}
