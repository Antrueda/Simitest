<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiDinfamConsumo extends Model
{


    protected $table = 'vsi_dinfam_consumo';

    protected $fillable = ['parametro_id', 'vsi_dinfamiliar_id', 'user_crea_id', 'user_edita_id','sis_esta_id',];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
}
