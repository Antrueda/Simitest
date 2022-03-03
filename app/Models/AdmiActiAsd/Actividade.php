<?php

namespace App\Models\AdmiActiAsd;

use App\Models\sistema\SisDepen;
use App\Models\sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividade extends Model
{
    use SoftDeletes;

    protected $table = 'asd_actividad';

    protected $fillable = [
        'nombre',
        'descripcion',
        'tipos_actividad_id',
        'consectivo_item',
        'estusuarios_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',



    ];

    public function tiposActividad() {
        return $this->belongsTo(TiposActividad::class);
    }

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

    public function sis_depen_id() {
        return $this->belongsToMany(SisDepen::class);
    }
}
