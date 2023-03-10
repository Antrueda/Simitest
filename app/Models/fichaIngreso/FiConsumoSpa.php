<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiConsumoSpa::create($dataxxxx);
            }

            $dataxxxx['sis_tabla_id'] = 7;
            //IndicadorHelper::asignaLineaBase($dataxxxx);

            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
