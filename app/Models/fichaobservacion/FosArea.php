<?php

namespace App\Models\fichaobservacion;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class FosArea extends Model{
    protected $fillable = [
        'nombre', 'contexto', 'descripcion', 'user_crea_id', 'user_edita_id', 'sis_esta_id',   
    ];
    
    protected $attributes = [ 'user_crea_id' => 1, 'user_edita_id'=> 1 ];

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function fos_tses(){
        return $this->hasMany(FosTse::class);
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
        $parametr = FosArea::select(['id as valuexxx', 'nombre as optionxx'])
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
