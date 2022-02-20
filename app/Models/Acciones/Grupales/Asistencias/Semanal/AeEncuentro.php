<?php

namespace App\Models\Ejemplo;

use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisLocalidad;
use App\Models\Sistema\SisServicio;
use App\Models\sistema\SisUpz;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AeEncuentro extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'sis_depen_id',
        'sis_servicio_id',
        'sis_localidad_id',
        'sis_upz_id',
        'sis_barrio_id',
        'prm_accion_id',
        'prm_actividad_id',
        'objetivo',
        'desarrollo_actividad',
        'metodologia',
        'observaciones', 'sis_esta_id', 'user_crea_id', 'user_edita_id'
    ];
    protected $table = 'ae_encuentros';

    public function recursos()
    {
        return $this->hasMany(AeRecurso::class, 'ae_encuentro_id');
    }

    public function contactos()
    {
        return $this->hasMany(AeContacto::class, 'ae_encuentro_id');
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
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

    public function prmAccion()
    {
        return $this->belongsTo(Parametro::class, 'prm_accion_id');
    }

    public function prmActividad()
    {
        return $this->belongsTo(Parametro::class, 'prm_actividad_id');
    }
}
