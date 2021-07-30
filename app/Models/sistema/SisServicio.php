<?php

namespace app\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisServicio extends Model
{
    protected $fillable = ['s_servicio', 'sis_esta_id','simianti_id', 'user_crea_id', 'user_edita_id'];

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
                ->orderBy('s_servicio', 'ASC')
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


    public static function getServicioDepe($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }

        $notinxxx = SisServicio::whereIn('id', SisDepeServ::where('sis_depen_id',$dataxxxx['dependen'])->where('sis_esta_id',1)
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


    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = SisServicio::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
