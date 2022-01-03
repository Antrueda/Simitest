<?php

namespace App\Models\Indicadores\Administ;

use App\Models\Parametro;
use App\Models\sistema\SisEsta;
use App\Models\Temacombo;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class InGrupregu extends Model
{
    protected $fillable = [
        'in_libagrup_id',
        'temacombo_id',
        'prm_disparar_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public function inLibagrup()
    {
        return $this->belongsTo(InLibagrup::class);
    }
    public function temacombo()
    {
        return $this->belongsTo(Temacombo::class);
    }
    public function prmDisparar()
    {
        return $this->belongsTo(Parametro::class,'prm_disparar_id');
    }
    public function userCrea()
    {
        return $this->belongsTo(User::class,'user_crea_id');
    }
    public function userEdita()
    {
        return $this->belongsTo(User::class,'user_edita_id');
    }
    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }
}
