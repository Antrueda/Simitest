<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdDinfamMadre extends Model{
    protected $fillable = ['csd_id', 'prm_convive_id', 'dia', 'mes', 'ano',
    'hijo', 'prm_separa_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'];



    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function convive(){
        return $this->belongsTo(Parametro::class, 'prm_convive_id');
    }

    public function separa(){
        return $this->belongsTo(Parametro::class, 'prm_separa_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function transaccion($dataxxxx,$objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            $dataxxxx['prm_tipofuen_id'] = 2315;
            $dataxxxx['sis_esta_id'] = 1;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = CsdDinfamMadre::create($dataxxxx);
            }

         return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
