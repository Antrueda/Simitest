<?php

namespace App\Models\consulta\pivotes;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdComFamiliar;
use App\Models\Sistema\SisNnaj;
use App\Traits\Fi\DatosBasicosTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdSisNnaj extends Model
{
    use DatosBasicosTrait;
    protected $table = 'csd_sis_nnaj';

    protected $fillable = ['csd_id', 'sis_nnaj_id','prm_tipofuen_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];
    public function sis_nnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }
    public function csd()
    {
        return $this->belongsTo(Csd::class);
    }

    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['prm_tipofuen_id' => 2315]);
            $modeloxx=CsdSisNnaj::where('csd_id',$dataxxxx['requestx']->csd_id)->where('sis_nnaj_id',$dataxxxx['requestx']->sis_nnaj_id)->first();
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($modeloxx->id)) {
                $modeloxx->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['prm_tipofuen_id' => 2315]);
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $modeloxx = CsdSisNnaj::create($dataxxxx['requestx']->all());
            }
            CsdComFamiliar::setCfNnajCsd($dataxxxx);
            return $modeloxx;
        }, 5);
        return $objetoxx;
    }
}
