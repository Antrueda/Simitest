<?php

namespace App\Models\fichaIngreso;

use App\Models\sistema\SisDepen;
use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NnajUpi extends Model
{

    protected $fillable = [
        'sis_nnaj_id',
        'sis_depen_id',
        'user_crea_id',
        'prm_principa_id',
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

    public function nnaj_deses()
    {
        return $this->hasMany(NnajDese::class);
    }
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }
    public function sis_nnaj_id()
    {
        return $this->belongsTo(SisNnaj::class);
    }
    public function sis_depen()
    {
        return $this->belongsTo(SisDepen::class, 'sis_depen_id');
    }
    public static function getDependenciasNnajUsuario($cabecera, $ajaxxxxx, $padrexxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }


        $notinxxy = SisDepen::select(['sis_depens.id'])->join('nnaj_upis', 'sis_depens.id', '=', 'nnaj_upis.sis_depen_id')
            ->where('nnaj_upis.sis_nnaj_id', $padrexxx)
            ->where('nnaj_upis.sis_esta_id', 1)
            ->get();

        $notinxxx = SisDepen::select(['sis_depens.id', 'sis_depens.nombre', 's_direccion', 's_telefono'])->join('sis_depen_user', 'sis_depens.id', '=', 'sis_depen_user.sis_depen_id')
            ->where('sis_depen_user.user_id', Auth::user()->id)
            ->wherein('sis_depen_user.sis_depen_id', $notinxxy->toArray())
            ->where('sis_depen_user.sis_esta_id', 1)
            ->get();

        foreach ($notinxxx as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }

    public static function getDependenciasNnaj($cabecera, $ajaxxxxx, $padrexxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }


        $notinxxx = SisDepen::select(['sis_depens.id', 'sis_depens.nombre'])->join('nnaj_upis', 'sis_depens.id', '=', 'nnaj_upis.sis_depen_id')
            ->where('nnaj_upis.sis_nnaj_id', $padrexxx)
            ->where('nnaj_upis.sis_esta_id', 1)
            ->get();

        foreach ($notinxxx as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }



    /** asingar upi al nnaj cuando se está creando datos basicos */
    public static function setUpiDatosBasicos($dataxxxx,  $datobasi) // $objetoxx=datos basicos
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $datobasi) {
            $objetoxx = NnajUpi::where('prm_principa_id', 227)
                ->where('sis_nnaj_id', $datobasi->sis_nnaj_id)
                ->first();
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($objetoxx->id)) {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['sis_esta_id'] = 1;
                $dataxxxx['prm_principa_id'] = 227;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = NnajUpi::create($dataxxxx);
            }

            NnajDese::setServicioDatosBasicos($dataxxxx,  $objetoxx);
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }

    public static function setUpiTrasladoCompartido($dataxxxx) // $objetoxx=datos basicos
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx = NnajUpi::where('prm_principa_id', 227)
                ->where('sis_nnaj_id', $dataxxxx['modeloxx']->sis_nnaj_id)
                ->first();
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($objetoxx->id) && $dataxxxx['sis_depen_id'] == $objetoxx->sis_depen_id) {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['sis_esta_id'] = 1;
                $dataxxxx['sis_nnaj_id'] = $dataxxxx['modeloxx']->sis_nnaj_id;
                $dataxxxx['prm_principa_id'] = 228;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = NnajUpi::create($dataxxxx);
            }
            //ddd($objetoxx);
            NnajDese::setServicioDatosBasicos($dataxxxx,  $objetoxx);
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }
    public function crearUpi($dataxxxx)
    {
        $dataxxxx['sis_esta_id'] = 1;
        $dataxxxx['sis_nnaj_id'] = $dataxxxx['modeloxx']->sis_nnaj_id;
        $dataxxxx['prm_principa_id'] = 227;
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = NnajUpi::create($dataxxxx);
    }
    public static function setUpiTrasladoGeneral($dataxxxx) // $objetoxx=datos basicos
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx = NnajUpi::where('sis_nnaj_id', $dataxxxx['modeloxx']->sis_nnaj_id)
                ->get();
            $upientra = NnajUpi::find($dataxxxx['sis_depen_id']);
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($objetoxx)) {
                foreach ($objetoxx as $d) {
                    if ($d->sis_depen_id != $dataxxxx['sis_depen_id']) {
                        if ($upientra == null) {
                            crearUpi( $dataxxxx);
                        }
                        $upixxxxx = $d->update(['sis_esta_id' => 2, 'prm_principa_id' => 228, 'user_edita_id' => Auth::user()->id]);
                        ddd($upixxxxx);
                    } else {
                        $d->update($dataxxxx);
                    }
                }
            } else {
                $dataxxxx['sis_esta_id'] = 1;
                $dataxxxx['sis_nnaj_id'] = $dataxxxx['modeloxx']->sis_nnaj_id;
                $dataxxxx['prm_principa_id'] = 227;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = NnajUpi::create($dataxxxx);
                $servicio = [
                    'sis_servicio_id' => $dataxxxx['sis_servicio_id'],
                    'prm_principa_id' => 227,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1
                ];

                $objetoxx = $objetoxx->nnaj_deses->create($servicio);
            }

            NnajDese::setServicioGeneral($dataxxxx,  $objetoxx);
            // ddd($objetoxx);
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }
}
