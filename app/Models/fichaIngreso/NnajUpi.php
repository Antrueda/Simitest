<?php

namespace App\Models\fichaIngreso;

use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

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

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }

    public function sis_nnaj_id()
    {
        return $this->belongsTo(SisNnaj::class);
    }
    public function sis_depens()
    {
        return $this->belongsTo(SisDepen::class);
    }
    public static function getDependenciasNnaj($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }

        $notinxxx = SisDepen::whereNotIn('id', NnajUpi::whereNotIn('sis_depen_id', [$dataxxxx['selectxx']])
            ->where('fi_datos_basico_id', $dataxxxx['padrexxx'])
            ->get(['sis_depen_id']))
            ->get();

        foreach ($notinxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }
}
