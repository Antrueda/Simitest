<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionMedicina;

use Illuminate\Database\Eloquent\Model;

class Remiasigna extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'nombre', 'codigo', 'estusuario_id',
    ];

    public function estusuario(){
        return $this->belongsTo(Estusuario::class, 'estusuario_id');
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
        $parametr = Diagnostico::select(['id as valuexxx', 'nombre as optionxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('nombre', 'desc')
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
