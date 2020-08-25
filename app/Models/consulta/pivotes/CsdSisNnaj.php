<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdSisNnaj extends Model
{
    protected $table = 'csd_sis_nnaj';
    public $timestamps = false;
    protected $fillable = ['csd_id', 'sis_nnaj_id','prm_tipofuen_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];
}
