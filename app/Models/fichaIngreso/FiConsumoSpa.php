<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class FiConsumoSpa extends Model
{
    protected $fillable = [
        'i_prm_consume_spa_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];
    public function fi_sustancia_consumidas()
    {
        return $this->hasMany(FiSustanciaConsumida::class);
    }
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public function sis_nnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }

    public function user_crea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function user_edita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function consumo($usuariox)
    {
        $vestuari = ['consuspa' => FiConsumoSpa::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

        if ($vestuari['consuspa'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
}
