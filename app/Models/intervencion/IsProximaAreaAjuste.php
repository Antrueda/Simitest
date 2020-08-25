<?php

namespace app\Models\intervencion;

use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IsProximaAreaAjuste extends Model
{
    protected $fillable = [
        'is_datos_basico_id',
        'i_prm_area_proxima_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function is_datos_basico()
    {
        return $this->belongsTo(IsDatosBasico::class);
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function proxareajuste($padrexxx)
    {
        $vestuari = ['proxareaj' => IsProximaAreaAjuste::where('is_datos_basico_id', $padrexxx)->first(), 'formular' => false];
        if ($vestuari['proxareaj'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
    public static function setAreajuste($objetoxx, $dataxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $datosxxx = [
                'is_datos_basico_id' => $objetoxx->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            // dd($dataxxxx);
            IsProximaAreaAjuste::where('is_datos_basico_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['i_prm_area_proxima_id'] as $diagener) {
                $datosxxx['i_prm_area_proxima_id'] = $diagener;
                IsProximaAreaAjuste::create($datosxxx);
            }
            return $objetoxx;
        }, 5);
    }
}
