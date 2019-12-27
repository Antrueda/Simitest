<?php

namespace App\Models\fichaobservacion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisUsuarioActividad;

class FosDatosBasico extends Model{
    protected $fillable = [
        'sis_nnaj_id',
        'sis_dependencia_id',
        'd_fecha_diligencia',
        'prm_area_id',
        'prm_seguimiento_id',
        'prm_sub_tipo_id',
        's_observacion',
        'fi_composicion_fami_id',
        'user_crea_id',
        'user_edita_id',
        'activo'
    ];

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sis_usuario_actividad(){
        return $this->belongsTo(SisUsuarioActividad::class);
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
