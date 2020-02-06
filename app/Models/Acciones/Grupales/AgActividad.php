<?php

namespace App\Models\Acciones\Grupales;

use App\Models\Indicadores\Area;
use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgActividad extends Model
{
    protected $fillable = [
    'd_registro',
    'area_id',
    'sis_deporigen_id',
    'sis_depdestino_id',
    'ag_tema_id',
    'i_prm_lugar_id',
    'ag_taller_id',
    'ag_sttema_id',
    'ag_sttran_id',
    'i_prm_dirig_id',
    's_prm_espac',
    'sis_entidad_id',
    's_introduc',
    's_justific',
    's_objetivo',
    's_metodolo',
    's_categori',
    's_contenid',
    's_estrateg',
    's_resultad',
    's_evaluaci',
    's_observac',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id',
  ];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = AgActividad::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    public static function combo($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        return $comboxxx;
    }
  
    public static function comb($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach (AgActividad::get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }
}