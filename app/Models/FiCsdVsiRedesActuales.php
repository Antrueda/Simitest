<?php

namespace App\Models;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiCsdVsiRedesActuales extends Model
{
    protected $fillable = [
        'sis_entidad_id',
        'sis_nnaj_id',
        'i_prm_tipo_red_id',
        's_nombre_persona',
        's_servicio',
        's_telefono',
        's_direccion',
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
                $objetoxx = FiCsdVsiRedesActuales::create($dataxxxx);
            }

            $dataxxxx['sis_tabla_id']=28;
            //IndicadorHelper::asignaLineaBase($dataxxxx);

            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
