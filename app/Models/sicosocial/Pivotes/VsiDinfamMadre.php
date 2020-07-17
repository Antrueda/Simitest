<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiDinfamMadre extends Model
{
    protected $table = 'vsi_dinfam_madres';

    protected $fillable = [
        'vsi_id',
        'prm_convive_id',
        'dia',
        'mes',
        'ano',
        'hijo',
        'prm_separa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'created_at',
        'updated_at',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}