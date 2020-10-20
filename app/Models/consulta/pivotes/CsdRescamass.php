<?php

namespace App\Models\consulta\pivotes;

use App\Models\consulta\CsdResidencia;
use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdRescamass extends Model
{
    protected $table = 'csd_rescamass';

    protected $fillable = ['prm_comparte_id', 'csd_residencia_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];


}
