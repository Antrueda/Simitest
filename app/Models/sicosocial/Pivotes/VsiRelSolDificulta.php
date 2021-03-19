<?php

namespace App\Models\sicosocial\Pivotes;
use Illuminate\Database\Eloquent\Model;

class VsiRelsolDificulta extends Model
{

    protected $table = 'vsi_relsol_dificulta';

    protected $fillable = [
        'parametro_id',
        'vsi_relsocial_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];


}
