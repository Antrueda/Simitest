<?php

namespace App\Models\Indicadores\Administ;

use App\Models\Parametro;
use App\Models\sistema\SisEsta;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class InIndiliba extends Model
{
    protected $fillable = [
        'in_linea_base_id',
        'in_areaindi_id',
        'prm_nivelxxx_id',
        'prm_categori_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function prmNivelxxx()
    {
        return $this->belongsTo(Parametro::class, 'prm_nivelxxx_id');
    }

    public function prmCategori()
    {
        return $this->belongsTo(Parametro::class, 'prm_categori_id');
    }

    public function inLineaBase()
    {
        return $this->belongsTo(InLineaBase::class);
    }

    public function inAreaindi()
    {
        return $this->belongsTo(InAreaindi::class);
    }

    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }
}
