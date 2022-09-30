<?php

namespace App\Models\Acciones\Grupales\Asistencias\Diaria;

use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsdSisNnaj extends Model
{
    //use SoftDeletes;

    //protected $table = 'asisdiar_sis_nnaj';

    protected $fillable = [
        'asd_diaria_id',
        'sis_nnaj_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
  
    ];

    public function prmNovedadx()
    {
        return $this->belongsTo(Parametro::class, 'prm_novedadx_id');
    }
    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sisNnaj()
    {
        return $this->belongsTo(AsdNnajActividades::class);
    }

    public function calcularEdad($fecha)
    {
        return Carbon::parse($fecha)->age;
    }
    
}
