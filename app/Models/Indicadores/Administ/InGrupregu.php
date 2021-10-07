<?php

namespace App\Models\Indicadores\Administ;

use Illuminate\Database\Eloquent\Model;

class InGrupregu extends Model
{
    protected $fillable = [
        'in_libagrup_id',
        'temacombo_id',
        'prm_disparar_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];
}
