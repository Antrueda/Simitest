<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisServicio extends Model
{
    protected $fillable = ['s_servicio', 'activo', 'user_crea_id', 'user_edita_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function sisMapaProcs()
    {
        return $this->hasMany(SisMapaProc::class);
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    
    public function sis_entidads(){
        return $this->belongsToMany(SisEntidad::class);
    }

    public static function combo($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach (SisServicio::get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }

    public function sis_dependencias()
    {
        {
            return $this->belongsToMany(SisDependencia::class);
        }
    }

}
