<?php

namespace app\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdAlimentInge extends Model
{
    protected $table = 'csd_aliment_inge';

    protected $fillable = ['parametro_id','prm_tipofuen_id', 'csd_alimentacion_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];
}
