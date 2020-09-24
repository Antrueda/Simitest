<?php

namespace App\Models\fichaIngreso;

use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepeServ;
use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NnajDese extends Model
{
    protected $fillable = [
        'sis_servicio_id',
        'nnaj_upi_id',
        'prm_principa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'

    ];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }
    public function sis_depser()
    {
        return $this->belongsTo(SisDepeServ::class);
    }
    public function nnaj_upi()
    {
        return $this->belongsTo(NnajUpi::class);
    }
    public static function getServiciosNnaj($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }

        $notinxxx = SisDepeServ::where('sis_depen_id', $dataxxxx['padrexxx'])
        ->where('sis_esta_id',1)
            ->get();

        foreach ($notinxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->sis_servicio->id, 'optionxx' => $registro->sis_servicio->s_servicio];
            } else {
                $comboxxx[$registro->id] = $registro->sis_servicio->s_servicio;
            }
        }
        return $comboxxx;
    }

    /** asingar servicio al nnaj cuando se está creando datos basicos */
    public static function setServicioDatosBasicos($dataxxxx,  $nnajupix) // $nnajupix=asocicin de la upi con el nnaj
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $nnajupix) {
            $objetoxx = NnajDese::where('prm_principa_id', 227)
                ->where('nnaj_upi_id', $nnajupix->id)
                ->first();
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($objetoxx->id)) {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['nnaj_upi_id'] =  $nnajupix->id;
                $dataxxxx['sis_esta_id'] = 1;
                $dataxxxx['prm_principa_id'] = 227;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = NnajDese::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }
}
