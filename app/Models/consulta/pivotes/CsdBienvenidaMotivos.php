<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdBienvenidaMotivos extends Model
{
    protected $table = 'csd_bienvenidas_motivos';
    public $timestamps = false;
    protected $fillable = ['parametro_id','prm_tipofuen_id', 'csd_bienvenidas_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];
}
