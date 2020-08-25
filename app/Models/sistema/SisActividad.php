<?php

namespace app\Models\Sistema;

use app\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisActividad extends Model
{
    protected $fillable = ['nombre', 'sis_docfuen_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function sisDocumentoFuente()
    {
        return $this->belongsTo(SisDocfuen::class,'sis_docfuen_id');
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function sis_fsoportes()
    {
        return $this->hasMany(SisFsoporte::class);
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function combo($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $activida = SisActividad::where('sis_docfuen_id', $padrexxx)->get();
        foreach ($activida as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }
}
