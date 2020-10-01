<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use App\Models\sicosocial\Vsi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiDatosVincula extends Model{
    protected $fillable = ['vsi_id', 'prm_razon_id', 'dia', 'mes', 'ano', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function razon(){
        return $this->belongsTo(Parametro::class, 'prm_razon_id');
    }

    public function persona(){
        return $this->belongsTo(Parametro::class, 'prm_persona_id');
    }

    public function situaciones(){
        return $this->belongsToMany(Parametro::class,'vsi_situacion_vincula', 'vsi_datos_vincula_id', 'parametro_id');
    }

    public function emociones(){
        return $this->belongsToMany(Parametro::class,'vsi_emocion_vincula', 'vsi_datos_vincula_id', 'parametro_id');
    }

    public function personas(){
        return $this->belongsToMany(Parametro::class,'vsi_personas', 'vsi_datos_vincula_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        if ($objetoxx != '') {
            $objetoxx->update($dataxxxx);
        } else {
            $dataxxxx['user_crea_id'] = Auth::user()->id;
            $objetoxx = VsiDatosVincula::create($dataxxxx);
        }
      

        
        return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
