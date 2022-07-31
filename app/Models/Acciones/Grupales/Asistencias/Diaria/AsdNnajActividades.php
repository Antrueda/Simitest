<?php

namespace App\Models\Acciones\Grupales\Asistencias\Diaria;

use App\Models\User;
use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdmiActiAsd\AsdActividad;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsdNnajActividades extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'asd_sis_nnajs_id',
        'asd_actividads_id',
        'prm_novedadx_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function prmNovedadx()
    {
        return $this->belongsTo(Parametro::class, 'prm_novedadx_id');
    }
    public function actividad()
    {
        return $this->belongsTo(AsdActividad::class, 'asd_actividads_id');
    }
    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function asdSisNaj(){
        return $this->belongsTo(AsdSisNnaj::class,'asd_sis_nnajs_id');
    }
  
}
