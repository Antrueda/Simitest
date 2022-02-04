<?php

namespace App\Models\AsisSema;

use App\Models\User;
use App\Models\AdmiActi\Actividade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;

class Asissema extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
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
        'user_fun_id',
        'user_res_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];

    protected $table = 'asissemas';
    protected $dates = ['prm_fecha_inicio','prm_fecha_final', 'created_at', 'updated_at', 'deleted_at'];

    // public function setPrmFechaInicioAttribute($value) {
    //     $this->attributes['prm_fecha_inicio'] = $value->format('d/m/y');
    // }

    // public function setPrmFechaFinalAttribute($value) {
    //     $this->attributes['prm_fecha_final'] = $value->format('d/m/y');
    // }


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
}
