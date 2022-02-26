<?php

namespace App\Models\AsisSema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsissemaMatricula extends Model
{
   // use SoftDeletes;

    protected $table = 'asisema_matriculas';

    protected $fillable = [
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
}
