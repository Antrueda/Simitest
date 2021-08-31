<?php

namespace App\Models\Actaencu;

use App\Models\Parametro;
use App\Models\sistema\SisEsta;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AeRecuadmi extends Model
{
    use SoftDeletes;

    protected $fillable = [
        's_recurso',
        'prm_trecurso_id',
        'prm_umedida_id',
        'estusuario_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function prm_trecurso()
    {
        return $this->belongsTo(Parametro::class, 'prm_trecurso_id');
    }

    public function prm_umedida()
    {
        return $this->belongsTo(Parametro::class, 'prm_umedida_id');
    }

    public function estusuario()
    {
        return $this->belongsTo(Estusuario::class);
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }
}
