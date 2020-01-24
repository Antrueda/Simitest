<?php

namespace App\Models\fichaobservacion;

use Illuminate\Database\Eloquent\Model;

class FosTse extends Model
{
    protected $fillable = [
        'area_id', 'nombre', 'descripcion', 'user_crea_id', 'user_edita_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function fos_area()
    {
        return $this->belongsTo(Area::class);
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
            ->orderBy('id', 'asc')
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
