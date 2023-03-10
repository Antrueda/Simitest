<?php

namespace App\Models;

use App\Models\Indicadores\Ajustes\InLigruTemacombos;
use Illuminate\Database\Eloquent\Model;
use App\Models\sistema\SisEsta;
use App\Models\sistema\SisTcampo;

class Temacombo extends Model
{
    protected $fillable = ['nombre', 'tema_id', 'sis_tcampo_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    
    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function parametros()
    {
        return $this->belongsToMany(Parametro::class)->withPivot(['simianti_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id']);
    }

    public function sisTcampo()
    {
        return $this->belongsTo(SisTcampo::class);
    }

    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }
}
