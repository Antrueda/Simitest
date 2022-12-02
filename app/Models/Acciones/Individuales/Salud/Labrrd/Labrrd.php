<?php

namespace App\Models\Acciones\Individuales\Salud\Labrrd;

use App\Models\User;
use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDepen;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;

class Labrrd extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'fechdili',
        'sis_origen_id',
        'sis_atenc_id',
        'prm_faseacomp',
        'observacion',
        'num_sesion',
        'lugar_externo',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function nnaj()
    {
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function upiOrigen()
    {
        return $this->belongsTo(SisDepen::class, 'sis_origen_id');
    }

    public function gustos_intereses()
    {
        return $this->belongsToMany(Parametro::class, 'labrrd_gustos', 'labrrd_id', 'prm_gusto_id');
    }

    public function habilidades()
    {
        return $this->belongsToMany(Parametro::class, 'labrrd_habilidades', 'labrrd_id', 'prm_habilidad_id');
    }

    // public function actividades()
    // {
    //     return $this->belongsToMany(PvfActividade::class, 'pvf_perfil_activis', 'pvf_perfil_voca_id', 'pvf_actividad_id');
    // }

    public function funcionario()
    {
        return $this->belongsTo(User::class, 'user_fun_id');
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
