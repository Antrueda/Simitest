<?php

namespace App\Models\Sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class SisServicio extends Model
{
    protected $fillable = ['s_servicio', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function sisMapaProcs()
    {
        return $this->hasMany(SisMapaProc::class);
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function sis_entidads()
    {
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

    public function sis_depens()
    { {
            return $this->belongsToMany(SisDepen::class);
        }
    }



    public static function gitServicioDepe($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }

        $notinxxx = SisServicio::whereNotIn('id', SisDepeServ::whereNotIn('sis_servicio_id', [$dataxxxx['selectxx']])
                ->where('sis_depen_id',$dataxxxx['dependen'])
                ->get(['sis_servicio_id']))
            ->get();

        foreach ($notinxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_servicio];
            } else {
                $comboxxx[$registro->id] = $registro->s_servicio;
            }
        }
        return $comboxxx;
    }
}
