<?php

namespace app\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdResideambiente extends Model
{
    protected $table = 'csd_reside_ambiente';

    protected $fillable = ['parametro_id','prm_tipofuen_id', 'csd_residencia_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];

}
