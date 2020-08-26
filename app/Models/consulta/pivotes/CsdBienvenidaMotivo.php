<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdBienvenidaMotivo extends Model
{

    protected $fillable = ['parametro_id','prm_tipofuen_id', 'csd_bienvenida_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];
}
