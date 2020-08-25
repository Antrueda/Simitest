<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdDinfamIncumple extends Model
{
    protected $table = 'csd_dinfam_incumple';
    public $timestamps = false;
    protected $fillable = ['parametro_id', 'prm_tipofuen_id','csd_dinfamiliar_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];
}
