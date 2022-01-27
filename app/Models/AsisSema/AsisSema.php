<?php

namespace App\Models\AsisSema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;

class Asissema extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sis_depen_id',
        'sis_servicio_id',
        'prm_actividad_id',
        'curso_id',
        'prm_grupo_id',
        'user_fun_id',
        'user_res_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];

    protected $table = 'asissemas';

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
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
