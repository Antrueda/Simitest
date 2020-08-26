<?php

namespace app\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiRelfamDificultad extends Model
{

    protected $table = 'vsi_relfam_dificultad';

    protected $fillable = [
        'parametro_id',
        'vsi_relfamiliar_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}
