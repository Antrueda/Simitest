<?php

namespace App\Models\Acciones\Grupales\Asistencias\Semanal;

use App\Models\User;
use App\Models\Parametro;
use App\Models\sistema\SisDepen;
use App\Models\AdmiActi\Actividade;
use App\Models\sistema\SisServicio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;

class AsisSema extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'consecut',
        'sis_depen_id',
        'sis_servicio_id',
        'prm_actividad_id',
        'curso_id',
        'convenio_prog_id',
        'actividade_id',
        'eda_grados_id',
        'prm_grupo_id',
        'h_inicio',
        'h_final',
        'prm_fecha_inicio',
        'prm_fecha_final',
        'descripcion',
        'user_fun_id',
        'user_res_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];

    protected $table = 'asissemas';
    protected $dates = ['prm_fecha_inicio', 'prm_fecha_final', 'created_at', 'updated_at', 'deleted_at'];

    // public function getPrmFechaInicioAttribute($value) {
    //     $this->attributes['prm_fecha_inicio'] = $value->format('d-m-Y');
    // }

    // public function getPrmFechaFinalAttribute($value) {
    //     $this->attributes['prm_fecha_final'] = $value->format('d-m-Y');
    // }

    public function upi()
    {
        return $this->belongsTo(SisDepen::class, 'sis_depen_id');
    }
    public function prm_serv()
    {
        return $this->belongsTo(SisServicio::class, 'sis_servicio_id');
    }
    public function prm_actividad()
    {
        return $this->belongsTo(Parametro::class, 'prm_actividad_id');
    }

    public function grado()
    {
        return $this->belongsTo(EdaGrado::class, 'eda_grados_id');
    }
    public function grupo()
    {
        return $this->belongsTo(GrupoMatricula::class, 'prm_grupo_id');
    }
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function actividade()
    {
        return $this->belongsTo(Actividade::class, 'actividade_id');
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function diasGrupo()
    {
        return $this->belongsToMany(Parametro::class, 'asissema_grupodias', 'asissema_id', 'prm_dia_id');
    }

    public function isResponsableUpiAsistencia()
    {
        $es_responsable = false;
        foreach ($this->upi->getDepeResponsUsua as $key => $responsable) {
            $responsable = ($responsable->user_id == Auth::user()->id) ? true : false;
        }
        return $es_responsable;
    }

    public function contarasistencia($dia)
    {
        $dia = date('Y-m-d', strtotime($dia));

        $numero = AsissemaAsisten::join('asisema_matriculas', 'asissema_asistens.asissema_matri_id', '=', 'asisema_matriculas.id')
            ->where('asisema_matriculas.asissema_id', $this->id)->where('asissema_asistens.valor_asis', 1)->whereDate('asissema_asistens.fecha', $dia)->count();
        return $numero;
    }
}
