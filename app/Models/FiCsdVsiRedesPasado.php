<?php

namespace App\Models;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiCsdVsiRedesPasado extends Model
{
    protected $fillable = [
        'sis_entidad_id',
        's_servicio',
        'i_tiempo',
        'i_prm_tiempo_id',
        'i_prm_anio_prestacion_id',
        'sis_nnaj_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiCsdVsiRedesPasado::create($dataxxxx);
            }

            $dataxxxx['sis_tabla_id']=29;
            //IndicadorHelper::asignaLineaBase($dataxxxx);

            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
