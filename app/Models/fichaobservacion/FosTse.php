<?php

namespace App\Models\fichaobservacion;

use App\Models\Indicadores\Administ\Area;
use Illuminate\Database\Eloquent\Model;

class FosTse extends Model
{
    protected $fillable = [
        'area_id',
        'nombre',
        'estusuario_id',
        'descripcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'  ,
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function fos_seguimientos(){
        return $this->hasMany(FosSeguimiento::class);
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  $temaxxxx tema que padre de los parámetros
     * @param  $cabecera indica si el combo se debe devolver con el seleccione
     * @param  $ajaxxxxx indica si el combo es para devolver en array para objeto json
     * @return $comboxxx
     */
    public static function combo($areaxxx, $cabecera, $ajaxxxxx)
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
        $parametr = FosTse::select(['id as valuexxx', 'nombre as optionxx'])
            ->where('area_id', $areaxxx)
            ->where('sis_esta_id', '1')
            ->orderBy('nombre', 'asc')
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


    public static function comboasignar($cabecera, $ajaxxxxx)
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
        $parametr = FosTse::select(['id as valuexxx', 'nombre as optionxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('nombre', 'asc')
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
