<?php

namespace App\Models\Acciones\Grupales\Educacion;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class IEstadoMs extends Model
{
    protected $fillable = [
        'imatrinnaj_id', 
        'fechdili',
        'prm_estado_matri',
        'prm_motivo_reti',
        'prm_mot_aplazad',
        'descripcion',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function nnajmatri()
    {
        return $this->belongsTo(IMatriculaNnaj::class, 'imatrinnaj_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
