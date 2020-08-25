<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdAlimentPrepara extends Model
{
    protected $table = 'csd_aliment_prepara';
    public $timestamps = false;
    protected $fillable = ['parametro_id','prm_tipofuen_id', 'csd_alimentacion_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];
}
