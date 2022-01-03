<?php

namespace App\Models\sicosocial\Pivotes;
use Illuminate\Database\Eloquent\Model;

class VsiRedsocMotivo extends Model
{

    protected $table = 'vsi_redsoc_motivo';

    protected $fillable = [
        'parametro_id',
        'vsi_redsocial_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];


}
