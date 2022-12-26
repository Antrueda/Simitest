<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class SEgreso extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'fecha', 'upi_id','sis_nnaj_id'
    ];


    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    public function derechos(){
        return $this->hasOne(EgresoDere::class, 'egreso_id');
    }

    public function seguimiento(){
        return $this->hasOne(EgreSegui::class, 'egreso_id');
    }

    public function redes(){
        return $this->hasOne(EgreRede::class, 'egreso_id');
    }
    public function comite(){
        return $this->hasOne(EgreComite::class, 'egreso_id');
    }

    public function apoyo(){
        return $this->hasMany(EgreApoyo::class, 'egreso_id');
    }

}
