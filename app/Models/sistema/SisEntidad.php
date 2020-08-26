<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

use app\Models\User;

class SisEntidad extends Model
{

    protected $fillable = ['nombre', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function sisMapaProcs()
    {
        return $this->hasMany(SisMapaProc::class);
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function sis_servicios(){
        return $this->belongsToMany(SisServicio::class);
    }
    public static function combo($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach (SisEntidad::get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }
    public static function comboservicios($padrexxx,$cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach (SisEntidad::where('id',$padrexxx)->first()->sis_servicios as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_servicio];
            } else {
                $comboxxx[$registro->id] = $registro->s_servicio;
            }
        }
        return $comboxxx;
    }
    
    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
