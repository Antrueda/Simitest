<?php

namespace App\Models\sicosocial\Pivotes;
use Illuminate\Database\Eloquent\Model;

class VsiDinfamDelito extends Model
{

    protected $table = 'vsi_dinfam_delito';

    protected $fillable = [
        'parametro_id',
        'vsi_dinfamiliar_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    
}
