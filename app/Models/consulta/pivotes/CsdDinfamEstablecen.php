<?php

namespace app\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdDinfamEstablecen extends Model
{
    protected $table = 'csd_dinfam_establecen';

    protected $fillable = ['parametro_id', 'csd_dinfamiliar_id', 'user_crea_id', 'user_edita_id','prm_tipofuen_id','sis_esta_id'];

  	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
}
