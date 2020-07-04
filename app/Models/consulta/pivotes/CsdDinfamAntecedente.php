<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdDinfamAntecedente extends Model
{
    protected $table = 'csd_dinfam_antecedente';

    protected $fillable = ['parametro_id', 'csd_dinfamiliar_id', 'user_crea_id', 'user_edita_id'];

  	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
}
