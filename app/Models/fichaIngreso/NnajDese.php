<?php

namespace App\Models\fichaIngreso;

use App\Models\sistema\SisDepeServ;
use App\Models\Sistema\SisServicio;
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

    public function sis_servicio()
    {
        return $this->belongsTo(SisServicio::class);
    }

    public function sisServicio()
    {
        return $this->belongsTo(SisServicio::class);
    }

    public function nnaj_upi()
    {
        return $this->belongsTo(NnajUpi::class, 'nnaj_upi_id');
    }

    public function nnajUpi()
    {
        return $this->belongsTo(NnajUpi::class, 'nnaj_upi_id');
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
            ->where('sis_esta_id', 1)
            ->get();

        foreach ($notinxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->sis_servicio->id, 'optionxx' => $registro->sis_servicio->s_servicio];
            } else {
                $comboxxx[$registro->sis_servicio->id] = $registro->sis_servicio->s_servicio;
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
            $dataxxxx['sis_esta_id'] = 1;
            $dataxxxx['prm_principa_id'] = 227;
            if (!is_null($objetoxx)) {
                $serexist = NnajDese::where('prm_principa_id', 228)
                    ->where('sis_servicio_id', $dataxxxx['sis_servicio_id'])
                    ->where('nnaj_upi_id', $nnajupix->id)
                    ->first();
                if (!is_null($serexist)) {
                    $serexist->update($dataxxxx);
                    $dataxxxx['prm_principa_id'] = 228;
                    $objetoxx->update($dataxxxx);
                    $objetoxx = $serexist;
                } else {
                    $objetoxx->update($dataxxxx);
                }
            } else {
                $dataxxxx['nnaj_upi_id'] =  $nnajupix->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = NnajDese::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }

    public static function setServicioGeneral($dataxxxx,  $nnajupix) // $nnajupix=asocicin de la upi con el nnaj
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $nnajupix) {
            $nnajupiz[] = 0;
            $nnajupiy = 0;
            foreach ($nnajupix as $d) {
                if ($d->sis_depen_id == $dataxxxx['sis_depen_id']) {
                    $nnajupiy = $d->sis_depen_id;
                }
                $nnajupiz[] = $d->id;
            }
            $objetoxx = NnajDese::where('prm_principa_id', 227)
                ->whereIn('nnaj_upi_id', $nnajupiz)
                ->get();
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($objetoxx)) {
                foreach ($objetoxx as $d) {
                    if ($d->sis_servicio_id != $dataxxxx['sis_servicio_id']) {
                        $d->update(['sis_esta_id' => 2, 'prm_principa_id' => 228, 'user_edita_id' => Auth::user()->id]);
                    } else {
                        $d->update($dataxxxx);
                    }
                }
            } else {
                $dataxxxx['nnaj_upi_id'] = $nnajupiy;
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
