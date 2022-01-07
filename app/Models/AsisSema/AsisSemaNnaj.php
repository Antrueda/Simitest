<?php

namespace App\Models\AsisSema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsisSemaNnaj extends Model
{
    use SoftDeletes;

    protected $table = 'asisema_sis_nnaj';

    protected $fillable = [
        'asissema_id',
        'sis_nnaj_id',
        // Todo: Colocar los campos de asistencia
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
}
