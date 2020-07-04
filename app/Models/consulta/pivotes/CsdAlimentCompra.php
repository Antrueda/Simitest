<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdAlimentCompra extends Model
{
    protected $table = 'csd_aliment_compra';

    protected $fillable = ['parametro_id', 'csd_alimentacion_id', 'user_crea_id', 'user_edita_id'];

  	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
}
