<?php

namespace App\Models;

use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisServicio;
use App\Models\Sistema\SisUpz;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActasEncuentro extends Model
{
    use SoftDeletes;

    protected $table = 'actas_encuentros';

    public function recursos()
    {
        return $this->hasMany(ActasEncuentroRecurso::class, 'actas_encuentro_id');
    }

    public function contactos()
    {
        return $this->hasMany(ActasEncuentroContacto::class, 'actas_encuentro_id');
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita');
    }

    public function sisDepen()
    {
        return $this->belongsTo(SisDepen::class, 'sis_depen_id');
    }

    public function sisServicio()
    {
        return $this->belongsTo(SisServicio::class, 'sis_servicio_id');
    }

    public function sisLocalidad()
    {
        return $this->belongsTo(SisLocalidad::class, 'sis_localidad_id');
    }

    public function sisUpz()
    {
        return $this->belongsTo(SisUpz::class, 'sis_upz_id');
    }

    public function sisBarrio()
    {
        return $this->belongsTo(SisBarrio::class, 'sis_barrio_id');
    }

    public function accionParametro()
    {
        return $this->belongsTo(Parametro::class, 'accion_parametro_id');
    }

    public function actividadParametro()
    {
        return $this->belongsTo(Parametro::class, 'actividad_parametro_id');
    }
}
