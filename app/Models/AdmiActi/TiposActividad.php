<?php

namespace App\Models\AdmiActi;

use App\Models\sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposActividad extends Model
{
    use SoftDeletes;

    protected $table = 'tipos_actividads';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estusuarios_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];

    public function estusuarios() {
        return $this->belongsTo(Estusuario::class);
    }

    public function sisEsta() {
        return $this->belongsTo(SisEsta::class);
    }

    public function userCrea() {
        return $this->belongsTo(User::class);
    }

    public function userEdita() {
        return $this->belongsTo(User::class);
    }
}
