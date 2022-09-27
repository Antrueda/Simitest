<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use Illuminate\Database\Eloquent\Model;

class TipoSuper extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'nombre', 'estusuario_id', 

    ];

    public function estausuario(){
        return $this->belongsTo(Compuesto::class, 'estusuario_id');
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
        $parametr = TipoSuper::select(['id as valuexxx', 'nombre as optionxx'])
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
