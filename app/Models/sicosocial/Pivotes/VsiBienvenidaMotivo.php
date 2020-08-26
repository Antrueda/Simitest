<?php

namespace app\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiBienvenidaMotivo extends Model
{


    protected $table = 'vsi_bienvenida_motivo';

    protected $fillable = ['parametro_id', 'vsi_bienvenida_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
}
