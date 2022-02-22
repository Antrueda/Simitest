<?php

namespace App\Models\Acciones\Grupales\Educacion;

use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;

class GrupoMatricula extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        's_grupo', 'observacion','horario','prm_jornada'
    ];

    public function prm_jornada(){
        return $this->belongsTo(Parametro::class, 'prm_jornada');
    }
    public function dias(){
      return $this->belongsToMany(Parametro::class,'grupo_dias', 'grupo_id', 'prm_dia_id');
    }

  public static function combo($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = [
                    'valuexxx' => '',
                    'optionxx' => 'Seleccione'
                ];
            } else {
                $comboxxx = [
                    '' => 'Seleccione'
                ];
            }
        }
        $parametr = GrupoMatricula::select(['id as valuexxx', 's_grupo as optionxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('s_grupo', 'desc')
            ->get();
        foreach ($parametr as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = [
                    'valuexxx' => $registro->valuexxx,
                    'optionxx' => $registro->optionxx
                ];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }
}
