<?php

namespace App\Models\Acciones\Grupales\Asistencias\Semanal;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Grupales\Asistencias\Semanal\AsissemaAsisten;



class AsissemaMatricula extends Model
{
    // use SoftDeletes;

    protected $table = 'asisema_matriculas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'asissema_id',
        'matricula_curso_id',
        'matric_tecni_id',
        'matric_convenio_id',
        'matric_acade_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function calcularEdad($fecha)
    {
        return Carbon::parse($fecha)->age;
    }

    public function asistencias()
    {
        return $this->hasMany(AsissemaAsisten::class, 'asissema_matri_id')->orderBy('fecha', 'asc');
    }
}
