<?php

namespace App\Models\AsisDiar;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsisDiarNnaj extends Model
{
    use SoftDeletes;

    protected $table = 'asisdiar_sis_nnaj';

    protected $fillable = [
        'asisdiar_id',
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
