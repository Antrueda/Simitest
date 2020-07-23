<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdDinfamProblema extends Model
{
    protected $table = 'csd_dinfam_problema';
    public $timestamps = false;
    protected $fillable = ['parametro_id', 'csd_dinfamiliar_id', 'user_crea_id', 'user_edita_id','prm_tipofuen_id'];

  	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
}
