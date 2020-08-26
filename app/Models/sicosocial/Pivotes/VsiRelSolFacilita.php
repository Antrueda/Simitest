<?php

namespace app\Models\sicosocial\Pivotes;
use Illuminate\Database\Eloquent\Model;

class VsiRelSolFacilita extends Model
{

    protected $table = 'vsi_relsol_facilita';

    protected $fillable = [
        'parametro_id',
        'vsi_relsocial_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}
