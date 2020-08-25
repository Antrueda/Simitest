<?php

namespace app\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiRelfamMotivo extends Model
{
    public $timestamps = false;
    protected $table = 'vsi_relfam_motivo';
    
    protected $fillable = [
        'parametro_id',
        'vsi_relfamiliar_id',
        'user_crea_id',
        'user_edita_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1, 
        'user_edita_id' => 1
    ];
}