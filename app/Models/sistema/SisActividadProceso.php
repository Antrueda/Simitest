<?php

namespace App\Models\Sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisActividadProceso extends Model
{
    protected $fillable = ['sis_actividad_id', 'sis_proceso_id', 'tiempo', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function sisActividad(){
        return $this->belongsTo(SisActividad::class, 'sis_actividad_id');
    }

    public function sisProceso(){
        return $this->belongsTo(SisProceso::class, 'sis_proceso_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}