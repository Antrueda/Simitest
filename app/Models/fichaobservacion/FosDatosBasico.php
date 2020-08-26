<?php

namespace App\Models\fichaobservacion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use app\Models\User;
use App\Models\Sistema\SisNnaj;

class FosDatosBasico extends Model{
    protected $fillable = [
        'sis_nnaj_id',
        'sis_depen_id',
        'd_fecha_diligencia',
        'area_id',
        'fos_tse_id',
        'fos_stse_id',
        's_observacion',
        'fi_composicion_fami_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

   

    public function SisNnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public static function usarioNnaj($idxxxxxx){
        return FosDatosBasico::where('id', $idxxxxxx)->first();
    }

    public static function transaccion($dataxxxx,  $objetoxx){
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx){
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != ''){
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FosDatosBasico::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
