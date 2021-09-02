<?php

namespace App\Models\Actaencu;

use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Parametro;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisServicio;
use App\Models\sistema\SisUpz;
use App\Models\User;
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
        'fechdili',
        'sis_barrio_id',
        'prm_accion_id',
        'prm_actividad_id',
        'user_contdili_id',
        'user_funcontr_id',
        'respoupi_id',
        'objetivo',
        'desarrollo_actividad',
        'metodologia',
        'observaciones', 'sis_esta_id', 'user_crea_id', 'user_edita_id'
    ];
    protected $table = 'ae_encuentros';
    public function user_contdili()
    {
        return $this->belongsTo(User::class, 'user_contdili_id');
    }
    public function user_funcontr()
    {
        return $this->belongsTo(User::class, 'user_funcontr_id');
    }
    public function respoupi()
    {
        return $this->belongsTo(User::class, 'respoupi_id');
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

    public function asistencia()
    {
        return $this->hasMany(AeAsistencia::class, 'ae_encuentro_id');
    }

    /**
     * Retorna verdadero o falso teniendo en cuenta el limite maximo.
     *
     * @param integer $max Limite maximo de registros
     * @param string $relation Nombre de la funcion que realiza la relacion entre los modelos.
     *
     * @return bool
     */
    public function getVerCrearAttribute($max, $relation)
    {
        $countreg = $this->$relation->count();
        return $countreg > $max ? false : true;
    }

    public function setObjetivoAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['objetivo'] = strtoupper($value);;
        }
    }
    public function setDesarrolloActividadAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['desarrollo_actividad'] = strtoupper($value);;
        }
    }
    public function setMetodologiaAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['metodologia'] = strtoupper($value);;
        }
    }
    public function setObservacionesAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['observaciones'] = strtoupper($value);;
        }
    }
}
